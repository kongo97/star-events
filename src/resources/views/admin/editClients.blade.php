<div class="column is-9">
    <h2>Clients</h2>
    <div class="panel">
        <div class="columns">
            <div class="column is-12">
                <div class="columns is-multiline" style="padding: 25px; padding-top: 0px;">
                    <div class="table-header columns column is-12">
                        <div class="column is-4">
                            <span class="span-text">Client Name</span>
                        </div>

                        <div class="column is-3">
                            <span class="span-text">Images Count</span>
                        </div>

                        <div class="column is-3">
                            <span class="span-text">Status</span>
                        </div>

                        <div class="column is-2">
                            <span class="span-text">Actions</span>
                        </div>
                    </div>
                    @foreach($clients as $client)
                        <div class="table-row columns column is-12">
                            <div class="column is-4">
                                <span class="span-text">{{ $client->name }}</span>
                            </div>

                            <div class="column is-3">
                                <span class="span-text">{{ count($client->images) }}</span>
                            </div>

                            <div class="column is-3">
                                @if($client->enabled)
                                    <a href="#" class="button is-orange" style="margin-top: -7px;">Disable</a>
                                @else
                                    <a href="#" class="button is-green" style="margin-top: -7px;">Enable</a>
                                @endif
                            </div>

                            <div class="column is-2">
                                <span class="span-text">
                                    <a href="/admin/client/{{ $client->id }}" class="material-symbols-outlined">
                                        edit
                                    </a>

                                    <a class="material-symbols-outlined has-text-red">
                                        delete
                                    </a>
                                </span>
                            </div>
                        </div>
                    @endforeach

                    <div class="column is-12">
                        <a href="#" class="button is-green right">Save</a>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="column is-3">
    <h2>Clients Report</h2>
    <div class="panel">
        <div class="columns" style="padding: 25px;">
            <div class="column">
                <span class="material-symbols-outlined has-text-lightgreen title-icon">
                    face
                </span>

                <br>
                <br>

                <p>Total Clients <span class="material-symbols-outlined" style="font-size: 14px;">info</span></p>
                <h2>{{ count($clients) }}</h2>
            </div>
        </div>
    </div>

    <h2>New Client</h2>
    <div class="panel">
        <div class="columns" style="padding: 25px;">
            <div class="column is-12">
                <span class="material-symbols-outlined has-text-lightgreen title-icon">
                    face
                </span>
                
                <a href="#" class="button is-green right">Create</a>  
            </div>
        </div>
    </div>
</div>