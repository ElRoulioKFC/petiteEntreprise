<script type="text/javascript">
    function deconnexion(){
        name = "<?php echo $_SESSION['cookie_user']; ?>";
        document.cookie = `${name}=; expires = Thu, 01 Jan 1970 00:00:00 GMT`; //on detruit le cookie
        document.location.reload(true); //on recharge la page
    }
</script>
