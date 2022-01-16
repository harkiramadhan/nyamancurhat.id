<?php
class Chat extends CI_Controller{
    function __construct(){
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');  

        $this->load->model([
            'Muser',
            'Mchat'
        ]);

        if($this->session->userdata('masuk') != TRUE){
            $this->session->set_flashdata('msg', "Login To Your Account");
            redirect('login', 'refresh');
        }
    }

    function index(){
        $role = $this->session->userdata('role');
        $userid = $this->session->userdata('id');

        if($role == 1){

        }elseif($role == 2){
            $var = [
                'role' => $role,
                'userid' => $userid,
                'user' => $this->Muser->getById($userid),
                'users' => $this->Muser->getUserNotCoach(),
                'title' => "Chat",
                'contents' => [
                    'coach/chat'
                ],
                'coach' => $this->Muser->getCoach()
            ];
        }elseif($role == 3){
            $var = [
                'role' => $role,
                'userid' => $userid,
                'user' => $this->Muser->getById($userid),
                'title' => "Chat",
                'contents' => [
                    'clients/chat'
                ],
                'coach' => $this->Muser->getCoach()
            ];
        }

        $this->load->view('templates/template', $var);
    }

    function getChat(){
        $userid = $this->session->userdata('id');
        $clientid = $this->input->get('userid', TRUE);
        $client = $this->Muser->getById($clientid);

        ?>
            <script src="<?= base_url('assets/js/custom/apps/chat/chat.js') ?>"></script>
            <!--begin::Messenger-->
            <div class="card" id="kt_chat_messenger">
                <!--begin::Card header-->
                <div class="card-header" id="kt_chat_messenger_header">
                    <!--begin::Title-->
                    <div class="card-title">
                        <!--begin::User-->
                        <div class="d-flex justify-content-center flex-column me-3">
                            <a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1"><?= $client->f_name." ".$client->l_name ?></a>
                            <!--begin::Info-->
                            <div class="mb-0 lh-1">
                                <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                <span class="fs-7 fw-bold text-muted">Active</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <div class="me-3">
                            <button class="btn btn-sm btn-icon btn-outline btn-outline-dashed btn-outline-default btn-active-light-default">
                                <i class="fas fa-eye fs-2"></i>
                            </button>
                        </div>
                        <?php if($this->session->userdata('role') == 2): ?>
                            <div class="me-n3">
                                <button class="btn btn-sm btn-icon btn-danger btn-close">
                                    <i class="fas fa-times fs-2"></i>
                                </button>
                            </div>
                        <?php endif; ?>
                        <!--end::Menu-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body" id="kt_chat_messenger_body">
                    <!--begin::Messages-->
                    <div class="text-center m-20" id="spinner-message">
                        <img src="<?= base_url('assets/img/loader.svg') ?>" alt="" class="mb-3" style="height: 75px;"> <br>
                        <small class="fs-5 fw-bolder text-gray-900 text-hover-primary">Loading Messages...</small>
                    </div>
                    <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto scroller-box" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer" data-kt-scroll-wrappers="#kt_content, #kt_chat_messenger_body" data-kt-scroll-offset="5px" style="max-height: 200px;">
                    
                        <div class="chat-box">
                            
                        </div>

                        <!--begin::Message(template for out)-->
                        <div class="d-flex justify-content-end mb-10 d-none template-msg-out">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-end">
                                <!--begin::User-->
                                <div class="d-flex align-items-end mb-2">
                                    <!--begin::Details-->
                                    <div class="me-2 my-auto">
                                        <img src="<?= base_url('assets/img/loader.svg') ?>" style="height: 25px;"> <br>
                                    </div>
                                    <div class="me-3">
                                        <span class="float-right me-3" style="float: right"> 
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary">You</a>
                                        </span>
                                        <br>
                                        <span class="text-muted fs-7 mb-1" style="float: left;">
                                            Just now
                                        </span>
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-1.jpg">
                                    </div>
                                    <!--end::Avatar-->
                                </div>
                                <!--end::User-->
                                <!--begin::Text-->
                                <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end template-msg-text"></div>
                                <!--end::Text-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Message(template for out)-->
                        <div class="d-flex justify-content-end mb-10" id="scroll-template"></div>
                        
                    </div>
                    <!--end::Messages-->
                </div>
                <!--end::Card body-->
                <!--begin::Card footer-->
                <div class="card-footer pt-4" id="kt_chat_messenger_footer">
                    <!--begin::Input-->
                    <div class="form-floating">
                        <textarea class="form-control text-message" id="floatingTextarea2" rows="1" data-kt-element="input" placeholder="Type a message" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Messages</label>
                    </div>
                    <!--end::Input-->
                    <button class="btn btn-outline btn-outline-dashed btn-outline-default btn-active-light-default w-100 mt-3 send" type="button" data-kt-element="send" ><i class="fas fa-paper-plane"></i> &nbsp;&nbsp;&nbsp;Send</button>
                </div>
                <!--end::Card footer-->
            </div>

            <script>
                var userid = '<?= $userid ?>'
                var clientid = '<?= $clientid ?>'

                var intervalId = window.setInterval(function(){
                    loadMessage(userid, clientid)
                }, 100);

                function loadMessage(userid, clientid){
                    scrollToBottom()
                    $.ajax({
                        url: '<?= site_url('chat/getMessages') ?>',
                        type: 'post',
                        data: {userid : userid, clientid : clientid},
                        success: function(res){
                            if(res === 'logout'){
                                location.reload();
                            }else{
                                $('#spinner-message').addClass('d-none')
                                $('.chat-box').html(res)
                            }
                        }
                    })
                }

                function scrollToBottom(){
                    inter4 = setInterval(() => {
                        if (!$('.chat-box').hasClass('active')) {
                            $(".scroller-box").scrollTop($(".scroller-box")[0].scrollHeight)
                        }
                    });
                }

                $('.btn-close').click(function(){
                    location.reload()
                })

                $(".scroller-box").scroll(function(){
                    $('.chat-box').addClass('active')
                })

                $('#kt_body').mouseenter(function () {
                    $('.chat-box').addClass('active')
                })

                $('#kt_body').mouseleave(function () {
                    $('.chat-box').removeClass('active')
                })

                $('.send').click(function(){
                    var message = $('.text-message').val()
                    postMessage(message)
                })

                $('.text-message').keypress(function(e){
                    var key = e.which
                    if(key === 13){
                        $('.send').click()
                        return false
                    }
                })

                function scrollToBox(){
                    $('.scroller-box').animate({
                        scrollTop: $(".scroller-box")[0].scrollHeight
                    }, 100)
                }

                function postMessage(message){
                    var userid = '<?= $userid ?>'
                    var clientid = '<?= $clientid ?>'

                    $.ajax({
                        url: '<?= site_url('chat/sendMessage') ?>',
                        type: 'post',  
                        data: {userid : userid, clientid : clientid, message : message},
                        beforeSend: function(){
                            $('.text-message').val('')
                            $('.template-msg-text').text(message)
                            $('.template-msg-out').removeClass('d-none')
                            scrollToBox()
                        }, 
                        success: function(res){
                            if(res.status == 200){
                                $('.template-msg-text').empty()
                                $('.template-msg-out').addClass('d-none')
                                scrollToBox()
                            }else{
                                location.reload()
                            }
                        }                                          
                    })
                }

            </script>
        <?php
    }

    function sendMessage(){
        $message = $this->input->post('message', TRUE);
        $userid = $this->input->post('userid', TRUE);
        $clientid = $this->input->post('clientid', TRUE);

        if($this->session->userdata('masuk') != TRUE){
            $res = [
                'status' => 500
            ];
        }else{
            $dataInsert = [
                'time' => date('Y-m-d H:i:s'),
                'sender_id' => $userid,
                'reciver_id' => $clientid,
                'message' => $message
            ];
            $this->db->insert('chat', $dataInsert);
            if($this->db->affected_rows() > 0){
                $res = [
                    'status' => 200
                ];
            }else{
                $res = [
                    'status' => 400
                ];
            }
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($res));
    }

    function getMessages(){
        $userid = $this->input->post('userid', TRUE);
        $clientid = $this->input->post('clientid', TRUE);
        $chat = $this->Mchat->getMessage($userid, $clientid)->result_array();
        $user = $this->Muser->getById($userid);
        $client = $this->Muser->getById($clientid);

        if($this->session->userdata('masuk') != TRUE){
            echo "logout";
        }else{
            ?>
                <?php 
                    $count = count($chat);
                    for($i = 0; $i < $count; $i++):
                ?>

                    <?php if($chat[$i]['sender_id'] == $userid): ?>
                        <!--begin::Message(out)-->
                        <div class="d-flex justify-content-end mb-10">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-end">
                                <!--begin::User-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                                    <div class="me-3">
                                        <span class="float-right" style="float: right"> 
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary">You</a>
                                        </span>
                                        <br>
                                        <span class="text-muted fs-7 mb-1" style="float: left;">
                                            <?= $this->time_elapsed_string($chat[$i]['time']) ?>
                                        </span>
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-1.jpg">
                                    </div>
                                    <!--end::Avatar-->
                                </div>
                                <!--end::User-->
                                <!--begin::Text-->
                                <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text"><?= $chat[$i]['message'] ?></div>
                                <!--end::Text-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Message(out)-->
                    <?php else: ?>
                        <!--begin::Message(in)-->
                        <div class="d-flex justify-content-start mb-10">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-start">
                                <!--begin::User-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-25.jpg">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-3">
                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary"><?= $client->f_name." ".$client->l_name ?></a>
                                        <br>
                                        <span class="text-muted fs-7 mb-1"><?= $this->time_elapsed_string($chat[$i]['time']) ?></span>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Text-->
                                <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text"><?= $chat[$i]['message'] ?></div>
                                <!--end::Text-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Message(in)-->
                    <?php endif; ?>
                <?php endfor; ?>
            <?php
        }

    }

    function time_elapsed_string($datetime, $full = false) {
        $time_ago = strtotime($datetime);  
        $current_time = time();  
        $time_difference = $current_time - $time_ago;  
        $seconds = $time_difference;  
        $minutes      = round($seconds / 60 );        // value 60 is seconds  
        $hours        = round($seconds / 3600);       //value 3600 is 60 minutes * 60 sec  
        $days         = round($seconds / 86400);      //86400 = 24 * 60 * 60;  
        $weeks        = round($seconds / 604800);     // 7*24*60*60;  
        $months       = round($seconds / 2629440);    //((365+365+365+365+366)/5/12)*24*60*60  
        $years        = round($seconds / 31553280);   //(365+365+365+365+366)/5 * 24 * 60 * 60  
        if($seconds <= 60) {  
        return "Just Now";  
        } else if($minutes <=60) {  
        if($minutes==1){  
            return "one minute ago";  
        }else {  
            return "$minutes minutes ago";  
        }  
        } else if($hours <=24) {  
        if($hours==1) {  
            return "an hour ago";  
        } else {  
            return "$hours hrs ago";  
        }  
        }else if($days <= 7) {  
        if($days==1) {  
            return "yesterday";  
        }else {  
            return "$days days ago";  
        }  
        }else if($weeks <= 4.3) {  //4.3 == 52/12
        if($weeks==1){  
            return "a week ago";  
        }else {  
            return "$weeks weeks ago";  
        }  
        } else if($months <=12){  
        if($months==1){  
            return "a month ago";  
        }else{  
            return "$months months ago";  
        }  
        }else {  
        if($years==1){  
            return "one year ago";  
        }else {  
            return "$years years ago";  
        }  
        }  
    }
}