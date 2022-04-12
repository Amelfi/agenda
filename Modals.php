<!-- Modal Para Insertar-->
<div class="modal fade" id="NewEventModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="insert.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel2"> <i class="icon-calendar"></i> New Event</h5>
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

<!-- Modal Para Insertar-->

<!-- Modal Para Actualizar-->
<div class="modal fade" id="UpdateEventModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="update.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1"> <i class="icon-calendar"></i> Edit Event</h5>
          <button type="button"class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body ">
              <input class="form-control form-group input-date" type="text" name="date" >
              <input class="form-control form-group input-time" type="time" name="time" id="" >
              <div class="form-group">
                        <label for="">Categories</label>
                  <?php if(count($categories)>0):?>
                    
                        <select name="categories" class=" form-control select-category">
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
            
              <input class="form-control form-group input-name" type="text" name="name" id="">
        </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-remove" data-dismiss="modal">Delete</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" value="save" name="save" class="btn btn-primary">Edit</button>
            <input type="hidden" class="input-id" name="id">
          </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Para Actualizar-->

<!-- Modal Para Eliminar-->
<div class="modal fade" id="deleteEventModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="update.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1"> <i class="icon-trash"></i> Delete Event</h5>
          <button type="button"class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body ">
             Are you sure, You want to delete the event from the calendar?
        </div>
          <div class="modal-footer">
       
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="#" class="btn btn-danger btn-delete">Delete</a>
            
          </div>
      
    </div>
  </div>
</div>

<!-- Modal Para Eliminar-->