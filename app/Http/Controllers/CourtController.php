<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourtRequest;
use App\Http\Requests\UpdateCourtRequest;
use App\Repositories\CourtRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CourtController extends AppBaseController
{
    /** @var CourtRepository $courtRepository*/
    private $courtRepository;

    public function __construct(CourtRepository $courtRepo)
    {
        $this->courtRepository = $courtRepo;
    }

    /**
     * Display a listing of the Court.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $courts = $this->courtRepository->all();

        return view('courts.index')
            ->with('courts', $courts);
    }

    /**
     * Show the form for creating a new Court.
     *
     * @return Response
     */
    public function create()
    {
        return view('courts.create');
    }

    /**
     * Store a newly created Court in storage.
     *
     * @param CreateCourtRequest $request
     *
     * @return Response
     */
    public function store(CreateCourtRequest $request)
    {
        $input = $request->all();

        $court = $this->courtRepository->create($input);

        Flash::success('Court saved successfully.');

        return redirect(route('courts.index'));
    }

    /**
     * Display the specified Court.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $court = $this->courtRepository->find($id);

        if (empty($court)) {
            Flash::error('Court not found');

            return redirect(route('courts.index'));
        }

        return view('courts.show')->with('court', $court);
    }

    /**
     * Show the form for editing the specified Court.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $court = $this->courtRepository->find($id);

        if (empty($court)) {
            Flash::error('Court not found');

            return redirect(route('courts.index'));
        }

        return view('courts.edit')->with('court', $court);
    }

    /**
     * Update the specified Court in storage.
     *
     * @param int $id
     * @param UpdateCourtRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCourtRequest $request)
    {
        $court = $this->courtRepository->find($id);

        if (empty($court)) {
            Flash::error('Court not found');

            return redirect(route('courts.index'));
        }

        $court = $this->courtRepository->update($request->all(), $id);

        Flash::success('Court updated successfully.');

        return redirect(route('courts.index'));
    }

    /**
     * Remove the specified Court from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $court = $this->courtRepository->find($id);

        if (empty($court)) {
            Flash::error('Court not found');

            return redirect(route('courts.index'));
        }

        $this->courtRepository->delete($id);

        Flash::success('Court deleted successfully.');

        return redirect(route('courts.index'));
    }
}
