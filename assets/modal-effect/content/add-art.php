<div id="add-reg" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                        <h4 class="modal-title">Agregar Artículo:</h4> 
                                                    </div> 
                                                    <form method="post" action="php/v-add-article.php">
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-1" class="control-label">Título</label> 
                                                                    <input type="text" class="form-control" name="art-name" id="field-1" placeholder="Nombra el Artículo" required> 
                                                                    
                                                                    <input name="usr-id" type="hidden" value="<?php echo $idc; ?>">
                                                                    <input name="cat-id" type="hidden" value="<?php echo $idp; ?>">
                                                                </div> 
                                                            </div> 
                                                        </div>
                                                        <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group no-margin"> 
                                                                    <label for="field-7" class="control-label">Descripción</label> 
                                                                    <textarea name="art-descr" class="form-control autogrow" id="field-7" placeholder="Describe el Artículo para que los demás usuarios lleguen a entender su duda o cuestión" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;" required></textarea> 
                                                                </div> 
                                                            </div> 
                                                        </div>
                                                    </div> 
                                                    <div class="modal-footer"> 
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                                                        <button type="submit" class="btn btn-purple waves-effect waves-light">Agregar</button> 
                                                    </div> 
                                                </form>
                                                </div> 
                                            </div>
                                        </div>