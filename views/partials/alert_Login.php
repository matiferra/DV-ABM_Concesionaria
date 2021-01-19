<?php if(isset($_SESSION['alert'])): ?>
    <div class="alert alert-<?php echo $_SESSION['alert']['type']; ?>">
        <?php echo $_SESSION['alert']['text']; ?>
    </div>
    <?php unset($_SESSION['alert']); ?>
<?php endif; ?>