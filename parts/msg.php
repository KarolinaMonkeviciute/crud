<?php if(isset($_SESSION['success']) || isset($_SESSION['error'])) : ?>
<div class="container mt-5" data-remove-after="5" data-removable>
        <div class="row">
            <div class="col">
 
            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_SESSION['success']; ?>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>
 
            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['error']; ?>
                </div>
                <?php unset($_SESSION['error']); ?>
            <?php endif; ?>
 
        </div>
    </div>
</div>

<?php endif ?>