
 <div class="bg-white p-5 rounded-3 text-secondary">
      <section>
        <div class="text-center">
          <h2>Registrarse como usuario</h2>
        </div>   
<?php $validation =  \Config\Services::validation(); ?>            
<form method="post" action="<?php echo base_url('/enviar-form') ?>">
   <?=csrf_field();?>
     <?=csrf_field();?>
     <?php if(!empty(session()->getFlashdata('fail'))):?>
     <div class="alert alert-danger"><?=(session()->getFlashdata('fail'))></div>
      <?php endif?>
     <?php if(!empty(session()->getFlashdata('success'))):?>
     <div class="alert alert-danger"><?=(session()->getFlashdata('success'))></div>
      <?php endif?> 

  <div class="form">
    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
    <input name="nombre" class="form-control" placeholder="nombre">
                     <!--Error-->
      <?php if($validation->getError('nombre')) {?>
        <div class='alert alert-danger mt-2'>
         <?= $error $validation->getError('nombre'); ?>
        </div>
        <?php}?>
  </div>
  <div class="mb-3">
    <label for="exampleformControlTextreal1" class="form-label">Apellido</label>
    <input type="text" name="apellido" class="form-control" placeholder="apellido">
                      <!--Error-->
      <?php if($validation->getError('apellido')) {?>
        <div class='alert alert-danger mt-2'>
         <?= $error $validation->getError('apellido'); ?>
        </div>
        <?php}?>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Direccion de correo</label>
    <input name="email" type="femail" class="form-control" placeholder="correo@algo.com">
                  <!--Error-->
      <?php if($validation->getError('email')) {?>
        <div class='alert alert-danger mt-2'>
         <?= $error $validation->getError('email'); ?>
        </div>
        <?php}?>

  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
    <input name="pass" type="password" class="form-control" placeholder="password">
                      <!--Error-->
      <?php if($validation->getError('pass')) {?>
        <div class='alert alert-danger mt-2'>
         <?= $error $validation->getError('pass'); ?>
        </div>
        <?php}?>
  </section>
  </div>
  <button type="submit"  class="btn btn-info w-100">Crear cuenta</button>
  
</form>
 </div>
  </div>
   </div>
          