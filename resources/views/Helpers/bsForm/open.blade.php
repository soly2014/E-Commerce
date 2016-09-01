<?php 
$title = isset($options['title']) ? $options['title'] : 'form';
?>
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">{{ $title }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::open(array_except($options,'title')) !!}
