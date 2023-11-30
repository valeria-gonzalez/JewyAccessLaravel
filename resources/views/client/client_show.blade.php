<x-mi-layout>
    <div class="container-fluid flex-grow-1 container-p-y">
        <x-text.page-heading1 span="Client / " after-span="Show Client" />
        <div class="nav-align-top mb-4">
            <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-client" aria-controls="navs-pills-justified-client" aria-selected="true">
                        <i class="tf-icons bx bx-home me-1"></i><span class="d-none d-sm-block">
                            Client Information</span>
                    </button>
                </li>

                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-system" aria-controls="navs-pills-justified-system" aria-selected="false">
                        <i class="tf-icons bx bx-message-square me-1"></i><span class="d-none d-sm-block"> System Information</span>
                    </button>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="navs-pills-justified-client" role="tabpanel">
                    <small class="text-light fw-medium">Client Information</small>
                    <dl class="row mt-2">
                        
                        <dt class="col-sm-3"> Client Id </dt>
                        <dd class="col-sm-9"> {{ $client->id }} </dd>

                        <dt class="col-sm-3"> Name </dt>
                        <dd class="col-sm-9"> {{ $client->full_name }} </dd>

                        <dt class="col-sm-3"> Phone Number </dt>
                        <dd class="col-sm-9"> {{ $client->phone_number }} </dd>
                    </dl>
                </div>

                <div class="tab-pane fade" id="navs-pills-justified-system" role="tabpanel">
                    <small class="text-light fw-medium">System Information</small>
                    <dl class="row mt-2">
                        <dt class="col-sm-3"> Created at </dt>
                        <dd class="col-sm-9"> {{ $client->created_at }} </dd>

                        <dt class="col-sm-3"> Created by </dt>
                        <dd class="col-sm-9"> {{ $client->user->name }} </dd>

                        <dt class="col-sm-3"> Updated at </dt>
                        <dd class="col-sm-9"> {{ $client->updated_at }} </dd>

                        <dt class="col-sm-3"> Updated by </dt>
                        <dd class="col-sm-9"> {{ $client->updated_by }} </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

</x-mi-layout>