<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Assessment</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.1/css/foundation-float.min.css">
    </head>
    <body>
        <div class="row medium-8 large-7 columns">
            <h1>People</h1>

            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $__currentLoopData = $people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                              <td><?php echo e($person->name); ?></td>
                            <td><a href="/edit/<?php echo e($person->id); ?>">edit</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    
                </tbody>
            </table>
        </div>
    </body>
</html>
