<div class="column is-5">
    <h2>Edit Client</h2>
    <div class="panel">
        <div class="panel-block">
            <input type="text" class="input" value="{{ $client->name }}">
            <a href="#" class="button is-green">Edit</a>
        </div>
    </div>
</div>

<div class="column is-3">
    <h2>Actions</h2>
    <div class="panel">
        <div class="panel-block">
            @if($client->enabled)
                <a href="#" class="button is-orange">Disable</a>
            @else
                <a href="#" class="button is-green">Enable</a>
            @endif
            
            <a href="#" class="button is-red" style="margin-left: 25px;">
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
                    <input class="file-input" id="uploaded_image" type="file" name="resume">
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