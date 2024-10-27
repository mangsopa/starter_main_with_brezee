<!-- Modals add menu -->
<div id="modal-form-edit-human-{{ $row->id }}" class="modal fade" tabindex="-1" aria-labelledby="modal-form-edit-human-{{ $row->id }}-label" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('employee.update', $row->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="modal-title" id="modal-form-edit-human-{{ $row->id }}-label">Edit User ({{ $row->nama }})</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="register" class="form-label">Register</label>
                        <input type="text" class="form-control" id="register" placeholder="register" name="register" value="{{ $row->register }}">
                        <x-form.validation.error name="register" />
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Role Nama" name="nama" value="{{ $row->nama }}">
                        <x-form.validation.error name="nama" />
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ">Update</button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->