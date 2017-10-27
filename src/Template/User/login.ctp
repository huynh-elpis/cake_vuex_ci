<section class="main-cont grey-bg">
    <?= $this->Flash->render() ?>
    <article class="login-frm">
        <?= $this->Form->create(null, ['id' => 'login','method'=>'post']) ?>
            <h2 class="title-frm">Login</h2>
            <div class="row-frm">
                <input class="txt-input" type="text" name="login_name" maxlength="32" placeholder="ログイン名"/>
            </div>
            <div class="row-frm">
                <input class="txt-input" type="password" name="password" maxlength="20" placeholder="パスワード"/>
            </div>
            <div class="row-frm">
                <div class="btn-block">
                    <button type="submit" class="btn login-btn">Login</button>
                </div>
                <p class="confirm-txt"><a href="<?=$this->Url->Build(['controller' => 'User', 'action' => 'resetAuth']);?>">パスワードをお忘れですか？</a></p>
            </div>
        <?= $this->Form->end()?>
    </article>
</section>
