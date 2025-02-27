<?php $__env->startSection('page-title',''); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <?php echo $__env->make('admin.partials.crumb',[
    'crumbs'=>[
            route('admin.dashboard')=>__('default.dashboard'),
            route('admin.lesson.index')=>__lang('classes'),
            '#'=>isset($pageTitle)?$pageTitle:''
        ]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div>
			<div >
				<div class="card">

					<div class="card-body">

                                <form action="<?php echo e(adminUrl(array('controller'=>'lesson','action'=>$action,'id'=>$id))); ?>" method="post">
                                    <?php echo csrf_field(); ?>


									<div class="form-group">
											<?php echo e(formLabel($form->get('name'))); ?>

										 <?php echo e(formElement($form->get('name'))); ?>   <p class="help-block"><?php echo e(formElementErrors($form->get('name'))); ?></p>

									</div>


                        <div class="form-group">
                            <?php echo e(formLabel($form->get('type'))); ?>

                            <?php echo e(formElement($form->get('type'))); ?>   <p class="help-block"><?php echo e(formElementErrors($form->get('type'))); ?></p>

                        </div>



                        


                        

                        



                        <div class="form-group">
											<?php echo e(formLabel($form->get('description'))); ?>

										 <?php echo e(formElement($form->get('description'))); ?>


                            <p class="help-block"><?php echo e(formElementErrors($form->get('description'))); ?></p>

									</div>

                        <div class="form-group online">
                            <?php echo e(formLabel($form->get('introduction'))); ?>


                            <?php echo e(formElement($form->get('introduction'))); ?>


                            <p class="help-block"><?php echo e(formElementErrors($form->get('introduction'))); ?></p>

                        </div>


                        

                        

                        <div class="form-group">
                            <?php echo e(formLabel($form->get('sort_order'))); ?>

                            <?php echo e(formElement($form->get('sort_order'))); ?>   <p class="help-block"><?php echo e(formElementErrors($form->get('sort_order'))); ?></p>

                        </div>
    

							<div class="form-footer">
								<button type="submit" class="btn btn-primary"><?php echo e(__lang('save-changes')); ?></button>
							</div>
                                           </form>
					</div>
				</div><!--end .box -->
			</div><!--end .col-lg-12 -->
		</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

    <script type="text/javascript" src="<?php echo e(asset('client/vendor/ckeditor/ckeditor.js')); ?>"></script>
    <script type="text/javascript">

        CKEDITOR.replace('hcontent', {
            filebrowserBrowseUrl: '<?php echo e(basePath()); ?>/admin/filemanager',
            filebrowserImageBrowseUrl: '<?php echo e(basePath()); ?>/admin/filemanager',
            filebrowserFlashBrowseUrl: '<?php echo e(basePath()); ?>/admin/filemanager'
        });

        CKEDITOR.replace('hintroduction', {
            filebrowserBrowseUrl: '<?php echo e(basePath()); ?>/admin/filemanager',
            filebrowserImageBrowseUrl: '<?php echo e(basePath()); ?>/admin/filemanager',
            filebrowserFlashBrowseUrl: '<?php echo e(basePath()); ?>/admin/filemanager'
        });

    </script>
    <script type="text/javascript">

        function image_upload(field, thumb) {
            console.log('image upload');
            $('#dialog').remove();

            $('#content').prepend('<div id="dialog" style="padding: 3px 0px 0px 0px;"><iframe src="<?php echo e(basePath()); ?>/admin/filemanager?&token=true&field=' + encodeURIComponent(field) + '" style="padding:0; margin: 0; display: block; width: 100%; height: 100%;" frameborder="no" scrolling="auto"></iframe></div>');

            $('#dialog').dialog({
                title: '<?php echo e(addslashes(__lang('Image Manager'))); ?>',
                close: function (event, ui) {
                    if ($('#' + field).attr('value')) {
                        $.ajax({
                            url: '<?php echo e(basePath()); ?>/admin/filemanager/image?&image=' + encodeURIComponent($('#' + field).val()),
                            dataType: 'text',
                            success: function(data) {
                                $('#' + thumb).replaceWith('<img src="' + data + '" alt="" id="' + thumb + '" />');
                            }
                        });
                    }
                },
                bgiframe: false,
                width: 800,
                height: 570,
                resizable: true,
                modal: false,
                position: "center"
            });
        };







        <?php if(false): ?>
        function image_upload(field, thumb) {
            $('#dialog').remove();

            $('#content').prepend('<div id="dialog" style="padding: 3px 0px 0px 0px;"><iframe src="<?php echo e(basePath()); ?>/admin/filemanager?&token=true&field=' + encodeURIComponent(field) + '" style="padding:0; margin: 0; display: block; width: 100%; height: 100%;" frameborder="no" scrolling="auto"></iframe></div>');

            $('#dialog').dialog({
                title: '<?php echo e(addslashes(__lang('Image Manager'))); ?>',
                close: function (event, ui) {
                    if ($('#' + field).attr('value')) {
                        $.ajax({
                            url: '<?php echo e(basePath()); ?>/admin/filemanager/image?&image=' + encodeURIComponent($('#' + field).val()),
                            dataType: 'text',
                            success: function(data) {
                                $('#' + thumb).replaceWith('<img src="' + data + '" alt="" id="' + thumb + '" />');
                            }
                        });
                    }
                },
                bgiframe: false,
                width: 800,
                height: 570,
                resizable: true,
                modal: false,
                position: "center"
            });
        };
        <?php endif; ?>

        $(function(){


            if($('select[name=type]').val()!='c'){
                $('.online').hide();
            };

            $('select[name=type]').change(function(){
                if($(this).val()=='c'){
                    $('.online').show();
                }
                else{
                    $('.online').hide();
                }

            });

        });
  </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lms\Resources\views/admin/lesson/add.blade.php ENDPATH**/ ?>