<!--Toast Message-->
<?php if ($this->session->flashdata('msg') == 'success') : ?>
    <script type="text/javascript">
        $.toast({
            heading: 'Success',
            text: "Data Saved!",
            showHideTransition: 'slide',
            icon: 'success',
            position: 'bottom-right',
            bgColor: '#7EC857',
            onclick: null,
            showDuration: "300",
            hideDuration: "1000"
        });
    </script>
<?php elseif ($this->session->flashdata('msg') == 'error') : ?>
    <script type="text/javascript">
        $.toast({
            heading: 'Info',
            text: "Error!",
            showHideTransition: 'slide',
            icon: 'info',
            position: 'bottom-right',
            bgColor: '#d63344',
            onclick: null,
            showDuration: "300",
            hideDuration: "1000"
        });
    </script>
<?php elseif ($this->session->flashdata('msg') == 'empty_field') : ?>
    <script type="text/javascript">
        $.toast({
            heading: 'Info',
            text: "Please fill the empty field!",
            showHideTransition: 'slide',
            icon: 'info',
            position: 'bottom-right',
            bgColor: '#d63344',
            onclick: null,
            showDuration: "300",
            hideDuration: "1000"
        });
    </script>
<?php elseif ($this->session->flashdata('msg') == 'info') : ?>
    <script type="text/javascript">
        $.toast({
            heading: 'Info',
            text: "Data Updated!",
            showHideTransition: 'slide',
            icon: 'info',
            position: 'bottom-right',
            bgColor: '#00C9E6',
            onclick: null,
            showDuration: "300",
            hideDuration: "1000"
        });
    </script>
<?php elseif ($this->session->flashdata('msg') == 'success-pdf') : ?>
    <script type="text/javascript">
        $.toast({
            heading: 'Success',
            text: "Success Created!",
            showHideTransition: 'slide',
            icon: 'success',
            position: 'bottom-right',
            bgColor: '#7EC857',
            onclick: null,
            showDuration: "300",
            hideDuration: "1000"
        });
    </script>
<?php elseif ($this->session->flashdata('msg') == 'success-delete') : ?>
    <script type="text/javascript">
        $.toast({
            heading: 'Success',
            text: "Data Deleted!.",
            showHideTransition: 'slide',
            icon: 'success',
            position: 'bottom-right',
            bgColor: '#7EC857',
            onclick: null,
            showDuration: "300",
            hideDuration: "1000"
        });
    </script>
<?php else : ?>

<?php endif; ?>