<?php

namespace App\Http\Controllers;

use App\DataTables\PurchaseDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePurchaseRequest;
use App\Http\Requests\UpdatePurchaseRequest;
use App\Repositories\PurchaseRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

use Neonexxa\BillplzWrapperV3\BillplzBill;
use App\Product;
use Auth;

class PurchaseController extends AppBaseController
{
    /** @var  PurchaseRepository */
    private $purchaseRepository;

    public function __construct(PurchaseRepository $purchaseRepo)
    {
        $this->purchaseRepository = $purchaseRepo;
    }

    /**
     * Display a listing of the Purchase.
     *
     * @param PurchaseDataTable $purchaseDataTable
     * @return Response
     */
    public function index(PurchaseDataTable $purchaseDataTable)
    {
        return $purchaseDataTable->render('purchases.index');
    }

    /**
     * Show the form for creating a new Purchase.
     *
     * @return Response
     */
    public function create()
    {
        return view('purchases.create');
    }

    /**
     * Store a newly created Purchase in storage.
     *
     * @param CreatePurchaseRequest $request
     *
     * @return Response
     */
    public function store(CreatePurchaseRequest $request)
    {
        // $input = $request->all();

        // $purchase = $this->purchaseRepository->create($input);

        // Flash::success('Purchase saved successfully.');

        // return redirect(route('purchases.index'));

        //
        $params = $request->all();
        $product = Product::find($params['product']);

        // from the guide
        $res0 = new BillplzBill;
        $res0->collection_id = $product->payment_link; 
        $res0->description = "New BIll"; 
        $res0->email = Auth::user()->email; 
        $res0->name = Auth::user()->name; 
        $res0->amount = $product->price*100; 
        $res0->callback_url = "http://localhost/zuhaldistributor.com"; 
        // and other optional params
        $res0 = $res0->create_bill();
        list($rhead ,$rbody, $rurl) = explode("\n\r\n", $res0);
        $bplz_result = json_decode($rurl);

        // Store the bill into our purchases
        $purchase = new Purchase;
        $purchase->user_id = Auth::user()->id;
        $purchase->product_id = $product->id;
        $purchase->bill_id = $bplz_result->id;
        $purchase->save();
        return redirect($bplz_result->url);
    }

    /**
     * Display the specified Purchase.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $purchase = $this->purchaseRepository->find($id);

        if (empty($purchase)) {
            Flash::error('Purchase not found');

            return redirect(route('purchases.index'));
        }

        return view('purchases.show')->with('purchase', $purchase);
    }

    /**
     * Show the form for editing the specified Purchase.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $purchase = $this->purchaseRepository->find($id);

        if (empty($purchase)) {
            Flash::error('Purchase not found');

            return redirect(route('purchases.index'));
        }

        return view('purchases.edit')->with('purchase', $purchase);
    }

    /**
     * Update the specified Purchase in storage.
     *
     * @param  int              $id
     * @param UpdatePurchaseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePurchaseRequest $request)
    {
        $purchase = $this->purchaseRepository->find($id);

        if (empty($purchase)) {
            Flash::error('Purchase not found');

            return redirect(route('purchases.index'));
        }

        $purchase = $this->purchaseRepository->update($request->all(), $id);

        Flash::success('Purchase updated successfully.');

        return redirect(route('purchases.index'));
    }

    /**
     * Remove the specified Purchase from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $purchase = $this->purchaseRepository->find($id);

        if (empty($purchase)) {
            Flash::error('Purchase not found');

            return redirect(route('purchases.index'));
        }

        $this->purchaseRepository->delete($id);

        Flash::success('Purchase deleted successfully.');

        return redirect(route('purchases.index'));
    }
}
