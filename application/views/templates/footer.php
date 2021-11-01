<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Sistem Monitoring Bus <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js" async></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js" async></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js" async></script>

<script>
    $('.custom-file-input').on('change', function() {
        let filename = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(filename);
    });

    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            }
        });

    });
</script>

<!-- Bus 1-->
<script type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            $('#asap').load('asapPHP')
        }, 1000);
    });
    $(document).ready(function() {
        setInterval(function() {
            $('#ppm').load('ppmPHP')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#koordinatRealtime').load('koordinatTerakhirPHP')
        }, 1000);
    });
    $(document).ready(function() {
        setInterval(function() {
            $('#kecepatanRealtime').load('kecepatanPHP')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#autoReloadTabelMentah').load('kecepatan_mentah')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#autopenumpang').load('penumpang_mentah')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#jumlah').load('penumpangPHP')
        }, 1000);
    });
    $(document).ready(function() {
        setInterval(function() {
            $('#statuspenumpang').load('statuspenumpangPHP')
        }, 1000);
    });
</script>
<!--END-->
<!-- Bus 2-->
<script type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            $('#asap2').load('asapPHP2')
        }, 1000);
    });
    $(document).ready(function() {
        setInterval(function() {
            $('#ppm2').load('ppmPHP2')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#autopenumpang2').load('penumpang_mentah2')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#koordinatRealtime2').load('koordinatTerakhirPHP2')
        }, 1000);
    });
    $(document).ready(function() {
        setInterval(function() {
            $('#kecepatanRealtime2').load('kecepatanPHP2')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#autoReloadTabelMentah2').load('kecepatan_mentah2')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#jumlah2').load('penumpangPHP2')
        }, 1000);
    });
    $(document).ready(function() {
        setInterval(function() {
            $('#statuspenumpang2').load('statuspenumpangPHP2')
        }, 1000);
    });
</script>
<!--END-->
<!-- Bus 3-->
<script type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            $('#asap3').load('asapPHP3')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#autopenumpang3').load('penumpang_mentah3')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#ppm3').load('ppmPHP3')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#koordinatRealtime3').load('koordinatTerakhirPHP3')
        }, 1000);
    });
    $(document).ready(function() {
        setInterval(function() {
            $('#kecepatanRealtime3').load('kecepatanPHP3')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#autoReloadTabelMentah3').load('kecepatan_mentah3')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#jumlah3').load('penumpangPHP3')
        }, 1000);
    });
    $(document).ready(function() {
        setInterval(function() {
            $('#statuspenumpang3').load('statuspenumpangPHP3')
        }, 1000);
    });
</script>
<!--END-->
<!-- Bus 4-->
<script type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            $('#asap4').load('asapPHP4')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#autopenumpang4').load('penumpang_mentah4')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#ppm4').load('ppmPHP4')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#koordinatRealtime4').load('koordinatTerakhirPHP4')
        }, 1000);
    });
    $(document).ready(function() {
        setInterval(function() {
            $('#kecepatanRealtime4').load('kecepatanPHP4')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#autoReloadTabelMentah4').load('kecepatan_mentah4')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#jumlah4').load('penumpangPHP4')
        }, 1000);
    });
    $(document).ready(function() {
        setInterval(function() {
            $('#statuspenumpang4').load('statuspenumpangPHP4')
        }, 1000);
    });
</script>
<!--END-->
<!-- Bus 5-->
<script type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            $('#asap5').load('asapPHP5')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#autopenumpang5').load('penumpang_mentah5')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#ppm5').load('ppmPHP5')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#koordinatRealtime5').load('koordinatTerakhirPHP5')
        }, 1000);
    });
    $(document).ready(function() {
        setInterval(function() {
            $('#kecepatanRealtime5').load('kecepatanPHP5')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#autoReloadTabelMentah5').load('kecepatan_mentah5')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#jumlah5').load('penumpangPHP5')
        }, 1000);
    });
    $(document).ready(function() {
        setInterval(function() {
            $('#statuspenumpang5').load('statuspenumpangPHP5')
        }, 1000);
    });
</script>
<!--END-->
<!-- Bus 6-->
<script type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            $('#autopenumpang6').load('penumpang_mentah6')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#asap6').load('asapPHP6')
        }, 1000);
    });
    $(document).ready(function() {
        setInterval(function() {
            $('#ppm6').load('ppmPHP6')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#koordinatRealtime6').load('koordinatTerakhirPHP6')
        }, 1000);
    });
    $(document).ready(function() {
        setInterval(function() {
            $('#kecepatanRealtime6').load('kecepatanPHP6')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#autoReloadTabelMentah6').load('kecepatan_mentah6')
        }, 1000);
    });

    $(document).ready(function() {
        setInterval(function() {
            $('#jumlah6').load('penumpangPHP6')
        }, 1000);
    });
    $(document).ready(function() {
        setInterval(function() {
            $('#statuspenumpang6').load('statuspenumpangPHP6')
        }, 1000);
    });
</script>
<!--END-->


</body>

</html>