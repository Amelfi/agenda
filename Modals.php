<!-- Modal -->
<div class="modal fade" id="NewEventModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="insert.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> <i class="icon-calendar"></i> New Event</h5>
          <button type="button"class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body ">
              <input class="form-control form-group input-date" type="text" name="date" placeholder="Fecha">
              <input class="form-control form-group" type="time" name="time" id="">
              <div class="form-group">
                        <label for="">Categories</label>
                  <?php if(count($categories)>0):?>
                    
                        <select name="categories" class=" form-control">
                          <?php foreach ($categories as $cat): ?>
                          
                            <option   value="<?="$cat->Id"?>">
                             <?= "$cat->name"?> 
                            </option>
                        
                          <?php endforeach ?>
                        </select>
                    <?php else:?>
                        <div class="alert alert-warning">No hay categorias</div>
                  <?php endif ?>                
              </div>
            
              <input class="form-control form-group" type="text" name="name" id="">
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" value="save" name="save" class="btn btn-primary">Save</button>
          </div>
      </form>
    </div>
  </div>
</div>