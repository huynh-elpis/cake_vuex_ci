<?php

use Cake\Core\Configure;

echo $this->Html->script('jquery.validate');
?>
<section class="main-cont grey-bg">
    <article class="mail-aut">
        <h3>メールアドレス認証</h3>
        <?= $this->Flash->render() ?>
        <p>パスワードを忘れた場合は、パスワードの再設定を行ってください。<br>登録メールアドレスを入れて送信ボタンを押すと、届いたメールから再設定することができます。</p>
        <?= $this->Form->create(null, ['id' => 'frmForm', 'method' => 'post']) ?>
        <?= $this->Form->hidden('email_exits', ['id' => 'email_exits', 'value' => 1]) ?>
        <input type="text" class="txt-input" name="mail_address" id="mail_address" maxlength="128"
               placeholder="メールアドレス"/>
        <div class="btn-block">
            <a class="btn mail-aut-btn" href="javascript:void(0)" id="confirm" title="送信">送信</a>
        </div>
        <?= $this->Form->end() ?>
    </article>
</section>
<div id="open_popup" class="btn-open-popup" data-id="modal2"></div>
<div id="modal2" class="to-popup pop-001">
    <span class="btn-close"></span>
    <div class="popup-cont">
        <p>パスワード再設定のメールを送信しますか？</p>
        <div class="btn-block">
            <a class="btn grey-btn close-popup" href="javascript:void(0)" title="いいえ">いいえ</a>
            <a class="btn red-btn" href="javascript:void(0)" onclick="$('#frmForm').submit()" title="はい">はい</a>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $.validator.addMethod("check_email", function (value, element) {
            if ($('#email_exits').val() == '1') {
                return true;
            } else {
                return false;
            }
        });
        $("#frmForm").validate({
            rules: {
                mail_address: {
                    required: true,
                    rangelength: [6, 128],
                    email: true,
                    check_email: true
                }
            },
            messages: {
                mail_address: {
                    required: "<?=Configure::read('MESSAGE_NOTIFICATION.MSG_005')?>",
                    rangelength: "<?=str_replace(array('{0}', '{1}'), array('8', '128'), Configure::read('MESSAGE_NOTIFICATION.MSG_009'))?>",
                    email: "<?=Configure::read('MESSAGE_NOTIFICATION.MSG_006')?>",
                    check_email: "<?=Configure::read('MESSAGE_NOTIFICATION.MSG_012')?>"
                },
            }
        });
    });
    $('#mail_address').keyup(function () {
        $('#email_exits').val(1);
    });
    $('#confirm').click(function () {
        $.ajax({
            type: 'post',
            url: '<?= $this->Url->build(["controller" => "User", "action" => "resetAuth"])?>',
            data: {'mail_address': $('#mail_address').val()},
            dataType: "json",
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-CSRF-Token', <?= json_encode($this->request->param('_csrfToken')); ?>);
            },
            success: function (data) {
                if (data > 0) {
                    $('#email_exits').val(1);
                } else {
                    $('#email_exits').val(0);
                }

                if ($("#frmForm").valid()) {
                    $('#open_popup').trigger('click');
                }
            }
        });
    });
</script>
