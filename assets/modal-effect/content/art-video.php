<div id="add-video-article" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                        <h4 class="modal-title">Video a subir:</h4> 
                                                    </div> 
                                                    <div class="modal-body">
                                                        <div class="row"> 
                                                            <div class="col-md-12"> 
                                                             <div class="form-group">
                                                                <label for="IMG">Video</label>
                                                                <form action="php/upload-vid.php?id=<?php echo $idp; ?>" class="dropzoner">
                                                                </form> 
                                                             </div>
                                                            </div> 
                                                        </div> 
                                                        <div class="alert alert-danger">
                                                            Solo puede subir <a class="alert-link">un solo</a> Video con un máximo de <a class="alert-link">50</a> MB.
                                                        </div>
                                                    </div> 
                                            </div>
                                        </div>
                                        
</div>