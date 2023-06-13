<div>
    <form wire:submit.prevent="simpan">
        <div class="form-group">
            <label>judul</label>
            <input wire:model="judul" type="text" name="" id=""
            class="form-control" placeholder="masukan judul">
        </div>

        <div class="form-group">
            <textarea wire:model="deskripsi" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-info">submit</button>
        </div>
    </form>
</div>
