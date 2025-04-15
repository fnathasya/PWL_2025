<!-- Form Tambah User -->
<form action="{{ url('/user/create_ajax') }}" method="POST" id="form-tambah">
    @csrf
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data User</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <!-- Level -->
                <div class="form-group">
                    <label>Level Pengguna</label>
                    <select name="level_id" id="level_id" class="form-control">
                        <option value="">- Pilih Level -</option>
                        @foreach($level as $l)
                            <option value="{{ $l->level_id }}">{{ $l->level_nama }}</option>
                        @endforeach
                    </select>
                    <small id="error-level_id" class="text-danger"></small>
                </div>

                <!-- Username -->
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" id="username" class="form-control">
                    <small id="error-username" class="text-danger"></small>
                </div>

                <!-- Nama -->
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                    <small id="error-nama" class="text-danger"></small>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <small id="error-password" class="text-danger"></small>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-warning">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</form>

<!-- CSRF AJAX Setup & Script -->
<script>
$(document).ready(function () {
    $("#form-tambah").on('submit', function(e) {
        e.preventDefault();
        $('.error-text').text(''); // Bersihkan error sebelumnya

        $.ajax({
            url: this.action,
            type: this.method,
            data: $(this).serialize(),
            success: function(response) {
                if (response.status) {
                    alert(response.message);
                    $('#form-tambah')[0].reset(); // reset form
                    $('#modal-master').modal('hide');
                    // Reload DataTable jika ada
                    $('#datatable').DataTable().ajax.reload();
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    const errors = xhr.responseJSON.errors || xhr.responseJSON.msgField;
                    $.each(errors, function(key, value) {
                        $('#error-' + key).text(value[0]);
                    });
                } else {
                    alert('Terjadi kesalahan: ' + xhr.responseText);
                }
            }
        });
    });
});
</script>
