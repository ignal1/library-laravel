<div class="col-md-8">
  <div class="media g-mb-30 media-comment">
    <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
      <div class="g-mb-15">
        <h5 class="h5 g-color-gray-dark-v1 mb-0"><?php echo e($author); ?></h5>
        <span class="g-color-gray-dark-v4 g-font-size-12"><?php echo e(\Carbon\Carbon::parse($comment->created_at)->diffForHumans()); ?></span>
      </div>

      <p><?php echo e($comment->content); ?></p>

      <ul class="list-inline d-sm-flex my-0">
        <li class="list-inline-item g-mr-20">
          <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">
            <i class="fa fa-thumbs-up g-pos-rel g-top-1 g-mr-3"></i>
            178
          </a>
        </li>
        <li class="list-inline-item g-mr-20">
          <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">
            <i class="fa fa-thumbs-down g-pos-rel g-top-1 g-mr-3"></i>
            34
          </a>
        </li>
      </ul>
    </div>
  </div>
</div><?php /**PATH /var/www/resources/views/comments/comment.blade.php ENDPATH**/ ?>