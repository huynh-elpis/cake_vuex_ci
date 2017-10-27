<?php

use Cake\Core\Configure;

echo $this->Html->script('jquery.validate');
?>
<section class="main-cont grey-bg">
    <article class="mail-aut">
        <h3>パスワード設定</h3>
        <?= $this->Flash->render() ?>
        <?php if ($show_edit == 1) { ?>
            <?= $this->Form->create(null, ['id' => 'frmForm', 'method' => 'post', 'class' => 'total-alias']) ?>
            <?= $this->Form->hidden('aid', ['id' => 'aid', 'value' => isset($user->id) ? $user->id : 0]) ?>
            <?= $this->Form->hidden('pass_exits', ['id' => 'pass_exits', 'value' => 0]) ?>
            <div class="row-frm">
                <span class="red-icon">※</span>
                <input type="password" class="txt-input txt-95" name="password" id="password" maxlength="20"
                       placeholder="パスワード"/>
                <p class="sub-aut">半角英数字8～20文字で入力してください。</p>
            </div>
            <div class="row-frm">
                <span class="red-icon">※</span>
                <input type="password" class="txt-input txt-95" name="password_confirm" id="password_confirm"
                       maxlength="20" placeholder="パスワード再入力"/>
            </div>
            <div class="btn-block">
                <a class="btn mail-aut-btn" href="javascript:void(0)" id="confirm" title="設定">設定</a>
            </div>
            <?= $this->Form->end() ?>
        <?php } ?>
    </article>
</section>
<?php if ($show_edit == 1) { ?>
    <div id="open_popup" class="btn-open-popup" data-id="modal2"></div>
    <div id="modal2" class="to-popup pop-001">
        <span class="btn-close"></span>
        <div class="popup-cont">
            <p>パスワードを設定してよろしいですか？</p>
            <div class="btn-block">
                <a class="btn grey-btn close-popup" href="javascript:void(0)" title="いいえ">いいえ</a>
                <a class="btn red-btn" href="javascript:void(0)" onclick="$('#frmForm').submit()" title="はい">はい</a>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $.validator.addMethod("passwordcheck", function (value) {
                return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
                    && /[a-z]/.test(value) // has a lowercase letter
                    && /[A-Z]/.test(value) // has a uppercase letter
                    && /\d/.test(value) // has a digit
            });
            $.validator.addMethod("check_pass_exits", function (value, element) {
                if ($('#pass_exits').val() == '0') {
                    return true;
                } else {
                    return false;
                }
            });
            $("#frmForm").validate({
                rules: {
                    password: {
                        required: true,
                        rangelength: [8, 20],
                        passwordcheck: true,
                        check_pass_exits: true
                    },
                    password_confirm: {
                        required: true,
                        equalTo: '#password'
                    }
                },
                messages: {
                    password: {
                        required: "<?=Configure::read('MESSAGE_NOTIFICATION.MSG_005')?>",
                        rangelength: "<?=str_replace(array('{0}', '{1}'), array('8', '20'), Configure::read('MESSAGE_NOTIFICATION.MSG_009'))?>",
                        passwordcheck: "<?=Configure::read('MESSAGE_NOTIFICATION.MSG_002')?>",
                        check_pass_exits: "<?=Configure::read('MESSAGE_NOTIFICATION.MSG_030')?>"
                    },
                    password_confirm: {
                        required: "<?=Configure::read('MESSAGE_NOTIFICATION.MSG_005')?>",
                        equalTo: "<?=Configure::read('MESSAGE_NOTIFICATION.MSG_027')?>"
                    },
                },
            });
        });
        $('#confirm').click(function () {
            $.ajax({
                type: 'post',
                url: '<?= $this->Url->build(["controller" => "User", "action" => "resetHash"])?>',
                data: {'password': $('#password').val(), 'id': $('#aid').val()},
                dataType: "json",
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', <?= json_encode($this->request->param('_csrfToken')); ?>);
                },
                success: function (data) {
                    if (data > 0) {
                        $('#pass_exits').val(1);
                    } else {
                        $('#pass_exits').val(0);
                    }

                    if ($("#frmForm").valid()) {
                        $('#open_popup').trigger('click');
                    }
                }
            });
        });
    </script>
<?php } ?>
