        <div id="reservation_wrapper">
            <div class="reservation_content">
                <div class="reservation_form">
                    <div class="reservation_form_wrapper">
                        <a id="reservation_cancel_btn" href="javascript:;"><i class="fa fa-close"></i></a>

                        <h2 class="ppb_title"><span class="ppb_title_first" >Table</span>Booking</h2>
                        <div id="reponse_msg">
                            <ul></ul>
                        </div>

                        <form id="tg_reservation_form" method="post">
                            <input type="hidden" id="action" name="action" value="tg_reservation_mailer" />

                            <div class="one_third">
                                <label for="your_name">Name*</label>
                                <input id="your_name" name="your_name" type="text" class="required_field" />
                            </div>

                            <div class="one_third">
                                <label for="email">Email*</label>
                                <input id="email" name="email" type="text" class="required_field" />
                            </div>

                            <div class="one_third last">
                                <label for="phone">Phone*</label>
                                <input id="phone" name="phone" type="text" class="required_field" />
                            </div>

                            <br class="clear" />
                            <br/>

                            <div class="one_third">
                                <label for="date" class="hidden">Date*</label>
                                <input type="text" class="pp_date required_field" id="date" name="date" value="10/07/2019">
                            </div>

                            <div class="one_third">
                                <label for="time">Time*</label>
                                <input type="text" class="pp_time required_field" id="time" name="time" value="06:00 PM" />
                            </div>

                            <div class="one_third last">
                                <label for="seats">Seats*</label>
                                <select id="seats" name="seats" class="required_field" style="width:99%">
                                    <option value="1">1 person</option>
                                    <option value="2">2 people</option>
                                    <option value="3">3 people</option>
                                    <option value="4">4 people</option>
                                    <option value="5">5 people</option>
                                    <option value="6">6 people</option>
                                    <option value="7">7 people</option>
                                    <option value="8">8 people</option>
                                    <option value="9">9 people</option>
                                    <option value="10">10 people</option>
                                    <option value="11">11 people</option>
                                    <option value="12">12 people</option>
                                    <option value="13">13 people</option>
                                    <option value="14">14 people</option>
                                    <option value="15">15 people</option>
                                    <option value="16">16 people</option>
                                    <option value="17">17 people</option>
                                    <option value="18">18 people</option>
                                    <option value="19">19 people</option>
                                    <option value="20">20+ people</option>
                                </select>
                            </div>

                            <br class="clear" />
                            <br/>

                            <div class="one">
                                <label for="message">Special Requests</label>
                                <textarea id="message" name="message" rows="7" cols="10"></textarea>
                            </div>

                            <br class="clear" />
                            <br/>

                            <div class="one">
                                <p>
                                    <input id="reservation_submit_btn" type="submit" value="Book Now" />
                                </p>
                            </div>

                            <br class="clear" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="parallax_overlay_header"></div>
        </div>