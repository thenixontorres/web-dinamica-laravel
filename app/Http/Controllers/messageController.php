<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemessageRequest;
use App\Http\Requests\UpdatemessageRequest;
use App\Repositories\messageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class messageController extends AppBaseController
{
    /** @var  messageRepository */
    private $messageRepository;

    public function __construct(messageRepository $messageRepo)
    {
        $this->messageRepository = $messageRepo;
    }

    /**
     * Display a listing of the message.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->messageRepository->pushCriteria(new RequestCriteria($request));
        $messages = $this->messageRepository->all();

        return view('messages.index')
            ->with('messages', $messages);
    }

    /**
     * Show the form for creating a new message.
     *
     * @return Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created message in storage.
     *
     * @param CreatemessageRequest $request
     *
     * @return Response
     */
    public function store(CreatemessageRequest $request)
    {
        $input = $request->all();

        $message = $this->messageRepository->create($input);

        Flash::success('Message saved successfully.');

        return redirect(route('messages.index'));
    }

    /**
     * Display the specified message.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $message = $this->messageRepository->findWithoutFail($id);

        if (empty($message)) {
            Flash::error('Message not found');

            return redirect(route('messages.index'));
        }

        return view('messages.show')->with('message', $message);
    }

    /**
     * Show the form for editing the specified message.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $message = $this->messageRepository->findWithoutFail($id);

        if (empty($message)) {
            Flash::error('Message not found');

            return redirect(route('messages.index'));
        }

        return view('messages.edit')->with('message', $message);
    }

    /**
     * Update the specified message in storage.
     *
     * @param  int              $id
     * @param UpdatemessageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemessageRequest $request)
    {
        $message = $this->messageRepository->findWithoutFail($id);

        if (empty($message)) {
            Flash::error('Message not found');

            return redirect(route('messages.index'));
        }

        $message = $this->messageRepository->update($request->all(), $id);

        Flash::success('Message updated successfully.');

        return redirect(route('messages.index'));
    }

    /**
     * Remove the specified message from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $message = $this->messageRepository->findWithoutFail($id);

        if (empty($message)) {
            Flash::error('Message not found');

            return redirect(route('messages.index'));
        }

        $this->messageRepository->delete($id);

        Flash::success('Message deleted successfully.');

        return redirect(route('messages.index'));
    }
}
