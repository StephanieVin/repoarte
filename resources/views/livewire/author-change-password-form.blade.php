<div>
    

    <form method="post" wire:submit.prevent='changePassword()'>
        <div class="row">
          <div class="col-md-4">
            <div class="mb-3">
              <label class="form-label">Contraseña actual</label>
              <input type="password" class="form-control" name="example-text-input" placeholder="Current password" wire:model='current_password'>
              <span class="text-danger">@error('current_password'){{ $message }}@enderror</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label class="form-label">Nueva Contraseña</label>
              <input type="password" class="form-control" name="example-text-input" placeholder="New password" wire:model='new_password'>
              <span class="text-danger">@error('new_password'){{ $message }}@enderror</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label class="form-label">Confirmar Nueva Contraseña</label>
              <input type="password" class="form-control" name="example-text-input" placeholder="Retype new password" wire:model='confirm_new_password'>
              <span class="text-danger">@error('confirm_new_password'){{ $message }}@enderror</span>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Cambiar Contraseña</button>
      </form>


</div>
