<!--begin::details View-->
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0 w-100">
            <div class="row w-100">
                <div class="col-md-8">
                    <h3 class="fw-bolder m-0">Documents</h3>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary btn-sm float-end" data-bs-toggle="modal"
                        data-bs-target="#documentsUploadModal">
                        Add New Document
                    </button>
                </div>
            </div>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->


    <!--begin::Card body-->
    <div class="card-body p-9">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>DateTime</th>
                        <th>Label</th>
                        <th>Document</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($documents as $document)
                        <tr>
                            <td>{{ $document->AccountDocumentKey }}</td>
                            <td>{{ $document->CreationInstant }}</td>
                            <td>{{ $document->Label }}</td>
                            <td>
                                @switch($tc->docType($document->ImagePath))
                                    @case('image')
                                        <img src="{{ $document->ImageUrl }}" alt="Document" style="height: 30px">
                                    @break

                                    @case('pdf')
                                        <img src="{{ asset('assets/media/svg/files/pdf.svg') }}" alt="Document"
                                            style="height: 30px">
                                    @break

                                    @default
                                        <img src="{{ asset('assets/media/svg/files/doc.svg') }}" alt="Document"
                                            style="height: 30px">
                                @endswitch
                            </td>
                            <td>
                                <a href="{{ route('store-setting.download.documents',$document->AccountDocumentKey) }}" target="_blank">
                                    Download
                                </a>
                                {{-- <a href="javascript:;"
                                    onclick="deleteDocument('{{ route('store-setting.delete.documents', $document->AccountDocumentKey) }}')"
                                    class="ms-3">
                                    Delete
                                </a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--end::Card body-->
</div>
<!--end::details View-->

<div class="modal fade" id="documentsUploadModal" tabindex="-1" role="dialog">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered mw-550px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Upload Document </h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                transform="rotate(45 7.41422 6)" fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body px-5 px-xl-15">
                <form role="form" action="{{ route('store-setting.upload.documents') }}" method="post"
                    id="store-setting-upload-documents-form" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="DocumentTypeKey" class="form-label fw-bold required">Document Type</label>
                                <select name="DocumentTypeKey" id="DocumentTypeKey" data-control="select2"
                                    onchange="documentTypeChange()" data-hide-search="true"
                                    class="form-select form-select-sm form-select-solid" required>
                                    <option value="">Select Document Type</option>
                                    @foreach ($documentTypes as $documentType)
                                        <option value="{{ $documentType->DocumentTypeKey }}">{{ $documentType->Name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-5 form-group" id="label-input">
                                <label for="Label" class="form-label fw-bold required">Label</label>
                                <input class="form-control" name="Label" type="text" placeholder="Enter Label">
                            </div>
                            <div class="mt-5 form-group">
                                <input class="form-control dropify" name="images" type="file"
                                    accept="image/*, application/pdf" required>
                            </div>
                        </div>
                        <div class="mt-4 text-center col-lg-12">
                            <input type="hidden" name="AccountKey" value="{{ $account->AccountKey }}">
                            <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                        </div>
                    </div>
                </form>

            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
