<!--begin::Content-->
<div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
    <!--begin::Messenger-->
    <div class="card" id="kt_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header" id="kt_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::User-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <span class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Task Comments</span>
                </div>
                <!--end::User-->
            </div>
            <!--end::Title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body" id="kt_chat_messenger_body">
            <!--begin::Messages-->
            <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer" data-kt-scroll-wrappers="#kt_content, #kt_chat_messenger_body" data-kt-scroll-offset="5px" style="max-height: 327px;">
                @foreach($task->taskComments as $comment)
                    @if($comment->user_id != null && $comment->user->role_id == \App\Models\Role::EMPLOYEE_ROLE)
                        <!--begin::Message(in)-->
                        <div class="d-flex justify-content-start mb-10">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-start">
                                <!--begin::User-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                                    <div class="ms-3">
                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">{{ $comment->user->role->label }}</a>
                                        <span class="text-muted fs-7 mb-1">{{ $comment->created_at }}</span>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Text-->
                                <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">
                                    {{ $comment->comment }}
                                </div>
                                <!--end::Text-->
                                @if($comment->file)
                                    <div class="d-flex align-items-center">
                                        <!--begin::Svg Icon | path: icons/duotune/files/fil003.svg-->
                                        <span class="svg-icon svg-icon-3x svg-icon-primary me-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z" fill="black"></path>
                                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <a href="javascript:void(0);" class="text-gray-800 text-hover-primary">{{ substr(trim($comment->file, 'tasks/'), -15) }}</a>
                                        <div class="ms-3">
                                            <a href="{{ route('admin.task.comment.file.download', $comment->id) }}" class="me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Download">
                                                <i class="bi bi-download"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Message(in)-->
                    @elseif($comment->user_id != null && $comment->user->role_id == \App\Models\Role::CLIENT_ROLE)
                        <!--begin::Message(in)-->
                        <div class="d-flex justify-content-start mb-10">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-start">
                                <!--begin::User-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                                    <div class="ms-3">
                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">{{ $comment->user->role->label }}</a>
                                        <span class="text-muted fs-7 mb-1">{{ $comment->created_at }}</span>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Text-->
                                <div class="p-5 rounded bg-light-warning text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">
                                    {{ $comment->comment }}
                                </div>
                                <!--end::Text-->
                                @if($comment->file)
                                    <div class="d-flex align-items-center">
                                        <!--begin::Svg Icon | path: icons/duotune/files/fil003.svg-->
                                        <span class="svg-icon svg-icon-3x svg-icon-primary me-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z" fill="black"></path>
                                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <a href="javascript:void(0);" class="text-gray-800 text-hover-primary">{{ substr(trim($comment->file, 'tasks/'), -15) }}</a>
                                        <div class="ms-3">
                                            <a href="{{ route('admin.task.comment.file.download', $comment->id) }}" class="me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Download">
                                                <i class="bi bi-download"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Message(in)-->
                    @endif
                    @if($comment->admin_id != null)
                        <!--begin::Message(out)-->
                        <div class="d-flex justify-content-end mb-10">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-end">
                                <!--begin::User-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                                    <div class="me-3">
                                        <span class="text-muted fs-7 mb-1">{{ $comment->created_at }}</span>
                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Text-->
                                <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">
                                    {{$comment->comment}}
                                </div>
                                <!--end::Text-->
                                @if($comment->file)
                                    <div class="d-flex align-items-center">
                                        <!--begin::Svg Icon | path: icons/duotune/files/fil003.svg-->
                                        <span class="svg-icon svg-icon-3x svg-icon-primary me-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z" fill="black"></path>
                                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <a href="javascript:void(0);" class="text-gray-800 text-hover-primary">{{ substr(trim($comment->file, 'tasks/'), -15) }}</a>
                                        <div class="ms-3">
                                            <a href="{{ route('admin.task.comment.file.download', $comment->id) }}" class="me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Download">
                                                <i class="bi bi-download"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Message(out)-->
                    @endif
                @endforeach
            </div>
            <!--end::Messages-->
        </div>
        <!--end::Card body-->
        <!--begin::Card footer-->
        <div class="card-footer pt-4" id="kt_chat_messenger_footer">
            <form action="{{ route('admin.task.comment.submit', $task->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!--begin::Input-->
                <textarea class="form-control form-control-flush mb-3" name="task_comment" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
                <!--end::Input-->
                <!--begin:Toolbar-->
                <div class="d-flex flex-stack">
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center me-2">
                        <input type="file" name="task_comment_file">
                    </div>
                    <!--end::Actions-->
                    <!--begin::Send-->
                    <button class="btn btn-primary" type="submit" data-kt-element="send">Send</button>
                    <!--end::Send-->
                </div>
                <!--end::Toolbar-->
            </form>
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::Content-->
