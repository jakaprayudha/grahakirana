<?php if (isset($_SESSION['sukses'])) { ?>
   <script>
      Swal.fire({
         icon: 'success',
         title: 'Good job!',
         text: "<?php echo $_SESSION['sukses']; ?>",
         showConfirmButton: false,
         timer: 1500
      }).then(function() {
         window.location = "<?php echo $_SESSION['redirectlogin']; ?>";
      });
   </script>
   <?php unset($_SESSION['sukses']); ?>
<?php } ?>

<?php if (isset($_SESSION['error'])) { ?>
   <script>
      Swal.fire({
         icon: 'error',
         title: 'Perhatian!',
         text: "<?php echo $_SESSION['error']; ?>",
         showConfirmButton: true
      }).then(function() {
         window.location = "<?php echo $_SESSION['redirectlogin']; ?>";
      });
   </script>
   <?php unset($_SESSION['error']); ?>
<?php } ?>