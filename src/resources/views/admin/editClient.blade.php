<div class="column is-5">
    <h2>Edit Client</h2>
    <div class="panel">
        <form class="panel-block" method="post" action="/admin/edit/client/name/{{ $client->id }}">
            @csrf
            <input type="text" class="input" name="name" value="{{ $client->name }}">
            <input type="submit" class="button is-green" style="margin-left: 10px;" value="Edit">
        </form>
    </div>
</div>

<div class="column is-3">
    <h2>Actions</h2>
    <div class="panel">
        <div class="panel-block">
            @if($client->enabled)
                <form method="get" action="/admin/disable/client/{{ $client->id }}">
                    <input type="submit" class="button is-orange" value="Disable">
                </form>
            @else
                <form method="get" action="/admin/enable/client/{{ $client->id }}">
                    <input type="submit" class="button is-green" value="Enable">
                </form>
            @endif
            
            <a href="/admin/delete/client/{{ $client->id }}" class="button is-red" style="margin-left: 25px;">
                <span class="material-symbols-outlined">
                    delete
                </span>
            </a>
        </div>
    </div>
</div>

<div class="column is-2">
    <h2>Images Count</h2>
    <div class="panel" style="padding: 28px;">
        <div class="panel-block">
            <span class="material-symbols-outlined has-text-lightgreen" style="font-size: 34px;">
                imagesmode
            </span>

            <span class="big-span" style="margin-left: 50px;">
                {{ count($client->images) }}
            </span>
        </div> 
    </div>
</div>

<div class="column is-2">
    <h2>New Image</h2>
    <div class="panel">
        <div class="panel-block">
            <form id="form-image" class="file is-primary" method="post" enctype="multipart/form-data" action="/admin/upload/image/{{ $client->id }}">
                @csrf
                <label class="file-label">
                    <input class="file-input" id="uploaded_image" accept="image/jpeg, image/png, image/jpg" type="file" name="resume">
                    <span class="file-cta">
                    <span class="material-symbols-outlined has-text-lightgreen" style="font-size: 34px;">
                        imagesmode
                    </span>
                    <span class="file-label">
                        Add
                    </span>
                    </span>
                </label>
            </form>
        </div>
    </div>
</div>

<div class="column is-12">
    <h2>Images</h2>
    <div class="panel">
        <div class="columns is-multiline" style="padding: 25px;">
            @foreach($client->images as $image)
                <div class="column is-3">
                    <figure class="image is-fullwidth">
                        <a href="/admin/delete/image/{{ $image->id }}" class="button absolute-button is-red">
                            <span class="material-symbols-outlined">
                                delete
                            </span>
                        </a>
                        <img src="{{ $image->url }}">
                    </figure>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script type="text/javascript">
    document.getElementById("uploaded_image").onchange = function(e) {
        document.getElementById("form-image").submit()
    }
</script>