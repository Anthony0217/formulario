<article style="background-image: url(imgs/black.jpg);">
<?php $__env->startSection('contenido'); ?>

<table align=center>
<tr >
<th><img src="imgs/lampara.png" alt="" width="150" height="150"></th>
<th><img src="imgs/lampara.png" alt="" width="150" height="150"></th>
<th><img src="imgs/lampara.png" alt="" width="150" height="150"></th>
<th><img src="imgs/lampara.png" alt="" width="150" height="150"></th>
</tr>



        <tr>
                <td><a href="<?php echo e(action('Control@gustabo')); ?>"><img src="imgs/gustaboDorejpg.jpg" alt="" width="200" height="265"><br><p>Gustabo Dore</p></a></td>
                <td><a href="<?php echo e(action('Control@picasso')); ?>"><img src="imgs/picassojpg.jpg" alt="" width="200" height="265"><br><p>Pablo Picasso</p></a></td>
                <td><a href="<?php echo e(action('Control@henri')); ?>"><img src="imgs/henriMatisse.jpg" alt="" width="200" height="265"><br><p>Herni Matisse</p></a></td>
                <td><a href="<?php echo e(action('Control@gustav')); ?>"><img src="imgs/gustavKlimt.jpg" alt="" width="200" height="265"><br><p>Gustav Klimt</p></a></td>
        </tr>  
       </table>
    <?php echo $__env->yieldSection(); ?>
  </article>

<?php /**PATH C:\laragon\www\PintoresS\resources\views/includes/contenido.blade.php ENDPATH**/ ?>