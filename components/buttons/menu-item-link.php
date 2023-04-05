<style>
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 30vmax;
        height: 7vmax;
        border: 3px solid var(--color--h2);
        border-radius: var(--border--radius-big);
    }

    .container:hover{
        background-color: var(--color--h2);
        cursor: pointer;
    }

    svg{
        width: 65%;
        height: 65%;
    }

    .st0 {
        fill: var(--color--h2);
    }
    .st1 {
        fill: var(--color--h2);
    }
    .st2 {
        fill: var(--color--h1-first);
    }

    .container:hover .st0 {
        fill: var(--color--h1-first);
    }
    .container:hover .st1 {
        fill: var(--color--h1-first);
    }
    .container:hover .st2 {
        fill: var(--color--h2);
    }

</style>

<div class="container">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
        <path class="st0" d="M256,0C114.7,0,0,114.7,0,256s114.7,256,256,256s256-114.7,256-256S397.3,0,256,0z M256,476.3
        c-121.6,0-220.3-98.7-220.3-220.3S134.4,35.7,256,35.7S476.3,134.4,476.3,256S377.6,476.3,256,476.3z"/>
        <path class="st1" d="M256,35.7C134.4,35.7,35.7,134.4,35.7,256S134.4,476.3,256,476.3S476.3,377.6,476.3,256S377.6,35.7,256,35.7z
         M381.7,197.2L238.8,340.1c-7,7-18.3,7-25.2,0l-83.3-83.3c-7-7-7-18.3,0-25.2c7-7,18.3-7,25.2,0l70.7,70.7l130.3-130.2
        c7-7,18.3-7,25.2,0C388.7,178.9,388.7,190.2,381.7,197.2z"/>
        <path class="st2" d="M381.7,197.2L238.8,340.1c-7,7-18.3,7-25.2,0l-83.3-83.3c-7-7-7-18.3,0-25.2c7-7,18.3-7,25.2,0l70.7,70.7
        l130.3-130.2c7-7,18.3-7,25.2,0C388.7,178.9,388.7,190.2,381.7,197.2z"/>
    </svg>
</div>

<script>
    /* Insert script of components */
</script>
