<style>
    iframe {
        width: 700px;
        height: 400px;
    }

    @media (max-width: 767px) {
        iframe {
            width: 100%;
            height: 400px;
        }
    }

    label {
        background-color: #fff;
    }

    input[type="radio"] {
        opacity: 0;
    }

    .form-check-label {
        border: 1px solid #eee;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 5px;
    }

    .form-check-label:hover {
        background: #4FCB9C !important;
        color: #fff;
    }

    .input-bg {
        background: #4FCB9C !important;
    }

    .form-check {
        padding-left: 0 !important;
    }

    .input-color {
        background-color: #31bd7e;
        color: #fff;
    }

    .question-section {
        background: #fff;
    }

    .label-padding {
        padding: 5px 0 !important;
        margin-left: 20px;
    }
</style>
<div style="padding: 15px;">
    <div class="container" style="background: #fff; border-radius: 5px;">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1" style="text-align: center; margin-top: 20px;">
                <h3 style="text-align: center;">SURVEY INSTRUCTIONS</h3>
                <p style="text-align: left;">
                    Please, watch the 2mins video below and then click on the (Show Survey Statements) button
                    below the video to reveal some survey statements, which require you to select one answer to
                    each statement except for statement 2 which you are required to provide an answer on a scale
                    of 1-5 for each sub-statement. It takes approximately 5mins to complete this section. When
                    completed, click on the submit button to finish.
                </p>
                <iframe src="https://www.youtube.com/embed/j-AohpjX_XA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <br>
                <button class="btn main-btn my-2" id="show-btn">Show Survey Statements</button>
            </div>
            <form method="post" id="form" style="background: #fff; display: none">
                <!-- First question  -->
                <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1 mt-5" style="border-top: 1px solid #aaa">
                    <div class="col-10 offset-1 p-2 mt-3 question-section">
                        <p class="questions-sentence mb-0">
                            1- I want to share my ideas and collaborate with other innovators and thinkers beyond my local
                            community if I find an easy-to-use and accessible platform to document and share my ideas: </p>
                    </div>
                    <div class="col-10 offset-1 mt-2">
                        <label class="form-check-label col-10 col-md-4 col-lg-4" for="first-radio">
                            <input class="form-check-input" value="Strongly disagree" type="radio" name="question_options_1" id="first-radio">
                            Strongly disagree
                        </label>
                        <div class="clearfix"></div>
                        <label class="form-check-label col-10 col-md-4 col-lg-4" for="second-radio">
                            <input class="form-check-input" value="Disagree" type="radio" name="question_options_1" id="second-radio">
                            Disagree
                        </label>
                        <div class="clearfix"></div>
                        <label class="form-check-label col-10 col-md-4 col-lg-4" for="third-radio">
                            <input class="form-check-input" value="Neutral" type="radio" name="question_options_1" id="third-radio">
                            Neutral
                        </label>
                        <div class="clearfix"></div>
                        <label class="form-check-label col-10 col-md-4 col-lg-4" for="forth-radio">
                            <input class="form-check-input" value="Agree" type="radio" name="question_options_1" id="forth-radio">
                            Agree
                        </label>
                        <div class="clearfix"></div>
                        <label class="form-check-label col-10 col-md-4 col-lg-4" for="fifth-radio">
                            <input class="form-check-input" value="Strongly agree" type="radio" name="question_options_1" id="fifth-radio">
                            Strongly agree
                        </label>
                    </div>
                </div>

                <!-- Second question  -->
                <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1 mt-5" style="border-top: 1px solid #aaa">
                    <div class="col-10 offset-1 p-2 mt-3 question-section">
                        <p class="questions-sentence mb-0 ">
                            2- I will prefer to experience a digital web platform having the following features:
                        </p>
                    </div>
                    <div class="col-10 offset-1 mt-2">

                        <!-- Second 21  -->
                        <div class="col-10 offset-1">
                            <p>i. User-friendly and intuitive interface that allows easy video upload and viewing:</p>
                            <div class="col-10 offset-1">
                                <label class="form-check-label col-1 label-padding" for="first-radio-21">
                                    <input class="form-check-input" value="1" type="radio" name="question_options_21" id="first-radio-21">
                                    1
                                </label>
                                <label class="form-check-label col-1 label-padding" for="second-radio-21">
                                    <input class="form-check-input" value="2" type="radio" name="question_options_21" id="second-radio-21">
                                    2
                                </label>
                                <label class="form-check-label col-1 label-padding" for="third-radio-21">
                                    <input class="form-check-input" value="3" type="radio" name="question_options_21" id="third-radio-21">
                                    3
                                </label>
                                <label class="form-check-label col-1 label-padding" for="forth-radio-21">
                                    <input class="form-check-input" value="4" type="radio" name="question_options_21" id="forth-radio-21">
                                    4
                                </label>
                                <label class="form-check-label col-1 label-padding" for="fifth-radio-21">
                                    <input class="form-check-input" value="5" type="radio" name="question_options_21" id="fifth-radio-21">
                                    5
                                </label>
                            </div>
                        </div>

                        <!-- Second 22  -->
                        <div class="col-10 offset-1">
                            <p>
                                ii. Mobile responsiveness working seamlessly across different devices such as desktops,
                                tablets, and smartphones:
                            </p>
                            <div class="col-10 offset-1">
                                <label class="form-check-label col-1 label-padding" for="first-radio-22">
                                    <input class="form-check-input" value="1" type="radio" name="question_options_22" id="first-radio-22">
                                    1
                                </label>
                                <label class="form-check-label col-1 label-padding" for="second-radio-22">
                                    <input class="form-check-input" value="2" type="radio" name="question_options_22" id="second-radio-22">
                                    2
                                </label>
                                <label class="form-check-label col-1 label-padding" for="third-radio-22">
                                    <input class="form-check-input" value="3" type="radio" name="question_options_22" id="third-radio-22">
                                    3
                                </label>
                                <label class="form-check-label col-1 label-padding" for="forth-radio-22">
                                    <input class="form-check-input" value="4" type="radio" name="question_options_22" id="forth-radio-22">
                                    4
                                </label>
                                <label class="form-check-label col-1 label-padding" for="fifth-radio-22">
                                    <input class="form-check-input" value="5" type="radio" name="question_options_22" id="fifth-radio-22">
                                    5
                                </label>
                            </div>
                        </div>

                        <!-- Second 23  -->
                        <div class="col-10 offset-1">
                            <p>
                                iii. Robust video management such as organizing videos into categories or playlists,
                                searching for specific videos, ability to add comments, annotations, and timestamps
                                to videos:
                            </p>
                            <div class="col-10 offset-1">
                                <label class="form-check-label col-1 label-padding" for="first-radio-23">
                                    <input class="form-check-input" value="1" type="radio" name="question_options_23" id="first-radio-23">
                                    1
                                </label>
                                <label class="form-check-label col-1 label-padding" for="second-radio-23">
                                    <input class="form-check-input" value="2" type="radio" name="question_options_23" id="second-radio-23">
                                    2
                                </label>
                                <label class="form-check-label col-1 label-padding" for="third-radio-23">
                                    <input class="form-check-input" value="3" type="radio" name="question_options_23" id="third-radio-23">
                                    3
                                </label>
                                <label class="form-check-label col-1 label-padding" for="forth-radio-23">
                                    <input class="form-check-input" value="4" type="radio" name="question_options_23" id="forth-radio-23">
                                    4
                                </label>
                                <label class="form-check-label col-1 label-padding" for="fifth-radio-23">
                                    <input class="form-check-input" value="5" type="radio" name="question_options_23" id="fifth-radio-23">
                                    5
                                </label>
                            </div>
                        </div>

                        <!-- Second 24  -->
                        <div class="col-10 offset-1">
                            <p>
                                iv. Sending instant notifications with invitations to view, review and provide
                                feedback on new video uploads:
                            </p>
                            <div class="col-10 offset-1">
                                <label class="form-check-label col-1 label-padding" for="first-radio-24">
                                    <input class="form-check-input" value="1" type="radio" name="question_options_24" id="first-radio-24">
                                    1
                                </label>
                                <label class="form-check-label col-1 label-padding" for="second-radio-24">
                                    <input class="form-check-input" value="2" type="radio" name="question_options_24" id="second-radio-24">
                                    2
                                </label>
                                <label class="form-check-label col-1 label-padding" for="third-radio-24">
                                    <input class="form-check-input" value="3" type="radio" name="question_options_24" id="third-radio-22">
                                    3
                                </label>
                                <label class="form-check-label col-1 label-padding" for="forth-radio-24">
                                    <input class="form-check-input" value="4" type="radio" name="question_options_24" id="forth-radio-24">
                                    4
                                </label>
                                <label class="form-check-label col-1 label-padding" for="fifth-radio-24">
                                    <input class="form-check-input" value="5" type="radio" name="question_options_24" id="fifth-radio-24">
                                    5
                                </label>
                            </div>
                        </div>

                        <!-- Second 25  -->
                        <div class="col-10 offset-1">
                            <p>
                                v. Integration with other tools such as video editing software, and social media
                                platforms, to provide a seamless user experience:
                            </p>
                            <div class="col-10 offset-1">
                                <label class="form-check-label col-1 label-padding" for="first-radio-25">
                                    <input class="form-check-input" value="1" type="radio" name="question_options_25" id="first-radio-25">
                                    1
                                </label>
                                <label class="form-check-label col-1 label-padding" for="second-radio-25">
                                    <input class="form-check-input" value="2" type="radio" name="question_options_25" id="second-radio-25">
                                    2
                                </label>
                                <label class="form-check-label col-1 label-padding" for="third-radio-25">
                                    <input class="form-check-input" value="3" type="radio" name="question_options_25" id="third-radio-25">
                                    3
                                </label>
                                <label class="form-check-label col-1 label-padding" for="forth-radio-25">
                                    <input class="form-check-input" value="4" type="radio" name="question_options_25" id="forth-radio-25">
                                    4
                                </label>
                                <label class="form-check-label col-1 label-padding" for="fifth-radio-25">
                                    <input class="form-check-input" value="5" type="radio" name="question_options_25" id="fifth-radio-25">
                                    5
                                </label>
                            </div>
                        </div>

                        <!-- Second 26  -->
                        <div class="col-10 offset-1">
                            <p>
                                vi. Analytics and reporting to help users track the performance of their videos, view
                                feedback metrics, and identify areas for improvement:
                            </p>
                            <div class="col-10 offset-1">
                                <label class="form-check-label col-1 label-padding" for="first-radio-26">
                                    <input class="form-check-input" value="1" type="radio" name="question_options_26" id="first-radio-26">
                                    1
                                </label>
                                <label class="form-check-label col-1 label-padding" for="second-radio-26">
                                    <input class="form-check-input" value="2" type="radio" name="question_options_26" id="second-radio-26">
                                    2
                                </label>
                                <label class="form-check-label col-1 label-padding" for="third-radio-26">
                                    <input class="form-check-input" value="3" type="radio" name="question_options_26" id="third-radio-26">
                                    3
                                </label>
                                <label class="form-check-label col-1 label-padding" for="forth-radio-26">
                                    <input class="form-check-input" value="4" type="radio" name="question_options_26" id="forth-radio-26">
                                    4
                                </label>
                                <label class="form-check-label col-1 label-padding" for="fifth-radio-26">
                                    <input class="form-check-input" value="5" type="radio" name="question_options_26" id="fifth-radio-26">
                                    5
                                </label>
                            </div>
                        </div>

                        <!-- Second 27  -->
                        <div class="col-10 offset-1">
                            <p>
                                vii. Security and privacy such as user authentication, data encryption, language
                                moderation, and access control to ensure that videos are accessed only by
                                authorized users.
                            </p>
                            <div class="col-10 offset-1">
                                <label class="form-check-label col-1 label-padding" for="first-radio-27">
                                    <input class="form-check-input" value="1" type="radio" name="question_options_27" id="first-radio-27">
                                    1
                                </label>
                                <label class="form-check-label col-1 label-padding" for="second-radio-27">
                                    <input class="form-check-input" value="2" type="radio" name="question_options_27" id="second-radio-27">
                                    2
                                </label>
                                <label class="form-check-label col-1 label-padding" for="third-radio-27">
                                    <input class="form-check-input" value="3" type="radio" name="question_options_27" id="third-radio-27">
                                    3
                                </label>
                                <label class="form-check-label col-1 label-padding" for="forth-radio-27">
                                    <input class="form-check-input" value="4" type="radio" name="question_options_27" id="forth-radio-27">
                                    4
                                </label>
                                <label class="form-check-label col-1 label-padding" for="fifth-radio-27">
                                    <input class="form-check-input" value="5" type="radio" name="question_options_27" id="fifth-radio-27">
                                    5
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Third question  -->
                <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1 mt-5" style="border-top: 1px solid #aaa">
                    <div class="col-10 offset-1 p-2 mt-3 question-section">
                        <p class="questions-sentence mb-0 ">
                            3- I feel more comfortable documenting my ideas and concepts using:
                        </p>
                    </div>
                    <div class="col-10 offset-1 mt-2">
                        <label class="form-check-label col-10 col-md-6 col-lg-6" for="first-radio-3">
                            <input class="form-check-input" value="Interactive Video documentation" type="radio" name="question_options_3" id="first-radio-3">
                            Interactive Video documentation
                        </label>
                        <div class="clearfix"></div>
                        <label class="form-check-label col-10 col-md-6 col-lg-6" for="second-radio-3">
                            <input class="form-check-input" value="Text documentation" type="radio" name="question_options_3" id="second-radio-3">
                            Text documentation
                        </label>
                        <div class="clearfix"></div>
                        <label class="form-check-label col-10 col-md-6 col-lg-6" for="third-radio-3">
                            <input class="form-check-input" value="Both" type="radio" name="question_options_3" id="third-radio-3">
                            Both
                        </label>
                        <div class="clearfix"></div>
                        <label class="form-check-label col-10 col-md-6 col-lg-6" for="third-radio-3">
                            <input class="form-check-input" value="None" type="radio" name="question_options_3" id="third-radio-3">
                            None
                        </label>
                        <div class="clearfix"></div>
                        <label class="form-check-label col-10 col-md-6 col-lg-6" for="forth-radio-3">
                            <input type="text" autocomplete="off" name="others_3" id="forth-radio-3" class="form-control" placeholder="Other(s) - Please specify">
                        </label>
                    </div>
                </div>

                <!-- Forth question  -->
                <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1 mt-5" style="border-top: 1px solid #aaa">
                    <div class="col-10 offset-1 p-2 mt-3 question-section">
                        <p class="questions-sentence mb-0">
                            4- There are a number of video creation tools accessible on the internet. I would rate my knowledge level of using video creation tools as:
                        </p>
                    </div>
                    <div class="col-10 offset-1 mt-2">
                        <label class="form-check-label col-10 col-md-4 col-lg-4" for="first-radio-4">
                            <input class="form-check-input" value="None" type="radio" name="question_options_4" id="first-radio-4">
                            None
                        </label>
                        <div class="clearfix"></div>
                        <label class="form-check-label col-10 col-md-4 col-lg-4" for="second-radio-4">
                            <input class="form-check-input" value="Beginner" type="radio" name="question_options_4" id="second-radio-4">
                            Beginner
                        </label>
                        <div class="clearfix"></div>
                        <label class="form-check-label col-10 col-md-4 col-lg-4" for="third-radio-4">
                            <input class="form-check-input" value="Intermediate" type="radio" name="question_options_4" id="third-radio-4">
                            Intermediate
                        </label>
                        <div class="clearfix"></div>
                        <label class="form-check-label col-10 col-md-4 col-lg-4" for="forth-radio-4">
                            <input class="form-check-input" value="Advanced" type="radio" name="question_options_4" id="forth-radio-4">
                            Advanced
                        </label>
                    </div>
                </div>

                <!-- Fifth question  -->
                <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1 mt-5" style="border-top: 1px solid #aaa">
                    <div class="col-10 offset-1 p-2 mt-3 question-section">
                        <p class="questions-sentence mb-0">
                            5- English language is not my first language and I see it as a barrier that could affect my confidence level in sharing my ideas and collaborating with people Globally:
                        </p>
                    </div>
                    <div class="col-10 offset-1 mt-2">
                        <label class="form-check-label col-10 col-md-4 col-lg-4" for="first-radio-5">
                            <input class="form-check-input" value="Strongly disagree" type="radio" name="question_options_5" id="first-radio-5">
                            Strongly disagree
                        </label>
                        <div class="clearfix"></div>
                        <label class="form-check-label col-10 col-md-4 col-lg-4" for="second-radio-5">
                            <input class="form-check-input" value="Disagree" type="radio" name="question_options_5" id="second-radio-5">
                            Disagree
                        </label>
                        <div class="clearfix"></div>
                        <label class="form-check-label col-10 col-md-4 col-lg-4" for="third-radio-5">
                            <input class="form-check-input" value="Neutral" type="radio" name="question_options_5" id="third-radio-5">
                            Neutral
                        </label>
                        <div class="clearfix"></div>
                        <label class="form-check-label col-10 col-md-4 col-lg-4" for="forth-radio-5">
                            <input class="form-check-input" value="Agree" type="radio" name="question_options_5" id="forth-radio-5">
                            Agree
                        </label>
                        <div class="clearfix"></div>
                        <label class="form-check-label col-10 col-md-4 col-lg-4" for="fifth-radio-5">
                            <input class="form-check-input" value="Strongly agree" type="radio" name="question_options_5" id="fifth-radio-5">
                            Strongly agree
                        </label>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12" style="text-align: center;">
                    <button type="submit" class="btn main-btn mt-2 mb-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.form-check-input').on('click', function() {
            $(this).parent().addClass('input-color').siblings().removeClass('input-color');
            var t = $('input[name="question_options"]:checked').val();
        })

        $('#show-btn').on('click', function() {
            $('#form').toggle();
            $(window).scrollTop(400);
        })

        $('#forth-radio-3').on('click', function() {
            $('input[name="question_options_3"]').prop('checked', false);
            $('input[name="question_options_3"]').removeClass('input-color');
        })
    })
</script>