
<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co-staff">
                            <?php foreach ($model as $item):?>
                            <img src="images/<?=$item->image;?>" alt="Free HTML5 Templates by gettemplates.co">
                            <h3><?=$item->name." ".$item->surname;?></h3>
                            <strong class="role"><?=$item->position;?></strong>
                            <p><?=$item->about_user;?></p>
                            <ul class="fh5co-social-icons">
                                <li><a href="https://www.facebook.com/<?=$item->facebook;?>"><i class="icon-facebook"></i></a></li>
                                <li><a href="https://t.me/<?=$item->telegram;?>"><i class="icon-paper-plane"></i></a></li>
                                <li><a href="https://github.com/<?=$item->github;?>"><i class="icon-github"></i></a></li>
                            </ul>
                            <?php endforeach;?>
                        </div>
</div>
