<div>
    <form action="#" class="bg-light" x-data="conversationReplyState()" wire:submit.prevent="replay" enctype="multipart/form-data">

        <input wire:model="body" x-on:keydown.enter="submit" type="text" class="form-control" aria-label="message…"
            placeholder="Write message…">

        <button type="button"><i class="fa fa-paper-plane" aria-hidden="true" x-ref="submit"></i>Send</button>
        <div class="send-btns">
            <div class="attach">
                <div class="button-wrapper">
                    <span class="label">
                        <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/upload.svg"
                            alt="image title"> attached file
                    </span>
                    <input type="file" id="file_upload_id" wire:model="attachment" name="attachment"
                        style="display: none;">
                    <button id="button-addon1" type="button" class="btn btn-link" x-on:click="attach">
                        <i  class="fa fa-paperclip file-browser"></i>
                   </button>

                </div>
            </div>
        </div>
    </form>
    {{--  <div class="input-group">
        <input type="text"
               wire:model="body"
               x-on:keydown.enter="submit"
               placeholder="Type a message"
               aria-describedby="button-addon2"
               class="form-control rounded-0 border-0 py-4 bg-light"
        >

        <div class="input-group-append">
            <button id="button-addon1" type="button" class="btn btn-link" x-on:click="attach"> <i class="fa fa-paperclip file-browser"></i></button>
            <input type="file" id="file_upload_id" wire:model="attachment" name="attachment" style="display: none;">
            <button id="button-addon2" type="submit" class="btn btn-link" x-ref="submit"> <i class="fa fa-paper-plane"></i></button>
        </div>
    </div>  --}}
</div>

<script type="application/javascript">
    function conversationReplyState() {
        return {
            attach () {
                document.getElementById('file_upload_id').click();
            },
            submit () {
                this.$refs.submit.click()
            }
        }
    }
</script>
