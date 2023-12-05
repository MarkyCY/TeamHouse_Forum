<div id="add-photo-article" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                        <h4 class="modal-title">Imagenes a subir:</h4> 
                                                    </div> 
                                                    <div class="modal-body">
                                                        <div class="row"> 
                                                            <div class="col-md-12"> 
                                                             <div class="form-group">
                                                                <label for="IMG">Imágenes</label>
                                                                <form action="php/upload-reg.php?id=<?php echo $idp; ?>" class="dropzone"></form> 
                                                             </div>
                                                            </div> 
                                                        </div> 
                                                        <div class="alert alert-danger">
                                                            Solo puede subir hasta un máximo de <a class="alert-link">5</a> imágenes.
                                                        </div>
                                                    </div> 
                                            </div>
                                        </div>
                                        
</div>