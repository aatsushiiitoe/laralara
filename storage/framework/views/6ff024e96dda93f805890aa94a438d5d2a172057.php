<?php $__env->startSection('content'); ?>

<!-- Bootstrapの定形コード… -->

<div class="panel-body">
  <!-- バリデーションエラーの表示 -->
  <?php echo $__env->make('common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <!-- 新タスクフォーム -->
  <form action="<?php echo e(url('task')); ?>" method="POST" class="form-horizontal">
    <?php echo e(csrf_field()); ?>


    <!-- タスク名 -->
    <div class="form-group">
      <label for="task-name" class="col-sm-3 control-label">Task</label>

      <div class="col-sm-6">
        <input type="text" name="name" id="task-name" class="form-control">
      </div>
    </div>

    <!-- タスク追加ボタン -->
    <div class="form-group">
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-default">
          <i class="fa fa-plus"></i> Add Task
        </button>
      </div>
    </div>
  </form>
</div>

<!-- TODO: Current Tasks -->
<!-- 現在のタスク -->
<?php if(count($tasks) > 0): ?>
<div class="panel panel-default">
  <div class="panel-heading">
    Current Tasks
  </div>

  <div class="panel-body">
    <table class="table table-striped task-table">

      <!-- テーブルヘッダ -->
      <thead>
        <th>Task</th>
        <th>&nbsp;</th>
      </thead>

      <!-- テーブル本体 -->
      <tbody>
        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <!-- Task Name -->
          <td class="table-text">
            <div><?php echo e($task->name); ?></div>
          </td>

          <!-- 削除ボタン -->
          <td>
            <form action="<?php echo e(url('task/'.$task->id)); ?>" method="POST">
              <?php echo e(csrf_field()); ?>

              <?php echo e(method_field('DELETE')); ?>


              <button type="submit" id="delete-task-<?php echo e($task->id); ?>" class="btn btn-danger">
                <i class="fa fa-btn fa-trash"></i>削除
              </button>
            </form>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>