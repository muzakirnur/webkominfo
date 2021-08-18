
  <!-- Modal -->
  <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Permohonan</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @csrf
          <form action="" method="POST">
            <input type="hidden" name="id" id="id">
            <label for="No.tiket" class="form-label">No Tiket</label>
          <div class="input-group mb-3">
            <input type="text" name="notiket" id="notiket" class="form-control" value="" readonly>
          </div>
          <label for="No.tiket" class="form-label">Kategori</label>
            <div class="input-group mb-3">
            <input type="text" name="kategori" id="kategori" class="form-control" value="" readonly>
          </div>
          <label for="No.tiket" class="form-label">Judul</label>
          <div class="input-group mb-3">
            <input type="text" name="judul" id="judul" class="form-control" value="" readonly>
          </div>
          <label for="No.tiket" class="form-label">Permohonan Terkait</label>
          <div class="input-group mb-3">
            <input type="text" name="pterkait" id="pterkait" class="form-control" value="" readonly>
          </div>
          <label for="No.tiket" class="form-label">Prioritas</label>
          <div class="input-group mb-3">
            <input type="text" name="prioritas" id="prioritas" class="form-control" value="" readonly>
          </div>
          <label for="No.tiket" class="form-label">Status</label>
          <div class="input-group mb-3">
            <input type="text" name="status" id="status" class="form-control" value="">
          </div>
          </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update Data</button>
        </div>
      </div>
    </div>
  </div>