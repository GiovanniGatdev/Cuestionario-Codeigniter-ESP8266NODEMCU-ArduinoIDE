<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
         <div class="modal-header">
            <h3 align="justify"><span class="label btn-color2 qid">2</span><br><br>Cargar el celular toda la noche puede quemar la pila.</h3>
         </div>
            <div class="quiz" id="quiz" data-toggle="buttons">
            <form action="<?php echo base_url(); ?>">
              <label class="element-animation1 btn btn-lg btn-success btn-block milabel"><span class="btn-label"><i class="glyphicon fa fa-plug icono" style="font-size: 30px; top: 30%;"></i></span><input type="submit"hidden="true" ><h4 class="icono">Cierto</h4></label>
            </form>
            <form action="<?php echo base_url(); ?>">
              <label class="element-animation2 btn btn-lg btn-danger btn-block milabel"><span class="btn-label"><i class="glyphicon fa fa-plug icono" style="font-size: 30px; top: 30%;"></i></span> <input type="submit" hidden="true" name="true"><h4 class="icono">Falso</h4></label>
            </form>
          </div>    
        </div>
      </div>
  </div>