function showGuest(){guestInputs.style.visibility="visible";guestButton.style.visibility="visible"}function switchToGuest(a){if(chooser==0){return}chooser=0;document.getElementById("radio-button-sel").value=0;document.contentForm.chooser.checked=true;document.contentForm.chooser.visible=true;document.contentForm.chooser.style.visibility="visible";document.contentForm1.chooser.checked=false;document.contentForm.chooser.tabindex=11;regHint.style.width="400px";guestLogin.style.width="450px";guestLogin.style.height="80px";guestInputs.style.top="312px";guestButton.style.top="13px";guestButton.style.width="115px";guestButton.style.left="220px";if(a==true){regTop=TOP_SELECT;scrolldown();x=setTimeout("showGuest();",GUEST_POPUP);x=setTimeout("document.contentForm.guestName.focus();",GUEST_POPUP)}else{regLogin.style.top=TOP_UNSEL+"px";regRadioButton.style.top=(TOP_UNSEL+BUTTON_OFFSET)+"px";document.contentForm.guestName.focus()}regHint.style.visibility="visible"}function switchToReg(a){if(chooser==1){return}chooser=1;document.getElementById("radio-button-sel").value=1;document.contentForm1.chooser.checked=true;document.contentForm1.chooser.visible=true;document.contentForm1.chooser.style.visibility="visible";document.contentForm.chooser.checked=false;document.contentForm1.chooser.tabindex=11;guestLogin.style.height="20px";guestInputs.style.visibility="hidden";guestButton.style.visibility="hidden";regHint.style.visibility="hidden";regButton.style.width="115px";regButton.style.left="228px";regButton.style.top="100px";regInputs.style.width="450px";regInputs.style.visibility="visible";if(a==true){regTop=TOP_UNSEL;x=setTimeout("document.contentForm1.username.focus();",35);scrollup()}else{regLogin.style.top=TOP_SELECT+"px";regRadioButton.style.top=(TOP_SELECT+BUTTON_OFFSET)+"px";document.contentForm1.username.focus()}regLogin.style.height="165px"}function scrollup(b,a){if(regTop-5<TOP_SELECT){regLogin.style.top=TOP_SELECT+"px";regRadioButton.style.top=(TOP_SELECT+BUTTON_OFFSET)+"px";return}regTop=regTop-5;regLogin.style.top=regTop+"px";regRadioButton.style.top=(regTop+BUTTON_OFFSET)+"px";x=setTimeout("scrollup();",0)}function scrolldown(b,a){if(regTop+5>TOP_UNSEL){regLogin.style.top=TOP_UNSEL+"px";regLogin.style.height="50px";regRadioButton.style.top=(TOP_UNSEL+BUTTON_OFFSET)+"px";regInputs.style.visibility="hidden";return}regTop=regTop+5;regLogin.style.top=regTop+"px";regRadioButton.style.top=(regTop+BUTTON_OFFSET)+"px";x=setTimeout("scrolldown();",0)}function visibility(b,a){if(b!=null){b.style.visibility=a}};