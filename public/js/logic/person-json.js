
    var counterSocial = 0;

    const labelSocial = `<label class="text-black font-weight-bold" for="sosmedName">Social profile URL</label>`;

    const twitter = (id) => `<div class="row mb-5" id="twitter">
      <div class="col-2 col-sm-1 my-auto">
        <div class="d-flex justify-content-center">
          <i class='bx bxl-twitter bx-md text-black'></i>
        </div>
      </div>
      <div class="col-10 col-sm-11 pl-0">
        <input type="text" name="" class="form-control sosmedName" data-sosmed="twitter" placeholder="Type your twitter URL here.." value="" data-id="${id}">
        <div class="invalid-feedback">Invalid URL</div>
      </div>
    </div>`;

    const facebook = (id) => `<div class="row mb-5" id="facebook">
      <div class="col-2 col-sm-1 my-auto">
        <div class="d-flex justify-content-center">
          <i class='bx bxl-facebook-square bx-md text-black'></i>
        </div>
      </div>
      <div class="col-10 col-sm-11 pl-0">
        <input type="text" name="" class="form-control sosmedName" data-sosmed="facebook" placeholder="Type your facebook URL here.." value="" data-id="${id}">
        <div class="invalid-feedback">Invalid URL</div>
      </div>
    </div>`;

    const instagram = (id) => `<div class="row mb-5" id="instagram">
      <div class="col-2 col-sm-1 my-auto">
        <div class="d-flex justify-content-center">
          <i class='bx bxl-instagram-alt bx-md text-black'></i>
        </div>
      </div>
      <div class="col-10 col-sm-11 pl-0">
        <input type="text" name="" class="form-control sosmedName" data-sosmed="instagram" placeholder="Type your instagram URL here.." value="" data-id="${id}">
        <div class="invalid-feedback">Invalid URL</div>
      </div>
    </div>`;

    const youtube = (id) => `<div class="row mb-5" id="youtube">
      <div class="col-2 col-sm-1 my-auto">
        <div class="d-flex justify-content-center">
          <i class='bx bxl-youtube bx-md text-black'></i>
        </div>
      </div>
      <div class="col-10 col-sm-11 pl-0">
        <input type="text" name="" class="form-control sosmedName" data-sosmed="youtube" placeholder="Type your youtube URL here.." value="" data-id="${id}">
        <div class="invalid-feedback">Invalid URL</div>
      </div>
    </div>`;

    const linkedin = (id) => `<div class="row mb-5" id="linkedin">
      <div class="col-2 col-sm-1 my-auto">
        <div class="d-flex justify-content-center">
          <i class='bx bxl-linkedin-square bx-md text-black'></i>
        </div>
      </div>
      <div class="col-10 col-sm-11 pl-0">
        <input type="text" name="" class="form-control sosmedName" data-sosmed="linkedin" placeholder="Type your linkedin URL here.." value="" data-id="${id}">
        <div class="invalid-feedback">Invalid URL</div>
      </div>
    </div>`;

    const pinterest = (id) => `<div class="row mb-5" id="pinterest">
      <div class="col-2 col-sm-1 my-auto">
        <div class="d-flex justify-content-center">
          <i class='bx bxl-pinterest bx-md text-black'></i>
        </div>
      </div>
      <div class="col-10 col-sm-11 pl-0">
        <input type="text" name="" class="form-control sosmedName" data-sosmed="pinterest" placeholder="Type your pinterest URL here.." value="" data-id="${id}">
        <div class="invalid-feedback">Invalid URL</div>
      </div>
    </div>`;

    const soundcloud = (id) => `<div class="row mb-5" id="soundcloud">
      <div class="col-2 col-sm-1 my-auto">
        <div class="d-flex justify-content-center">
          <i class='bx bxl-soundcloud bx-md text-black'></i>
        </div>
      </div>
      <div class="col-10 col-sm-11 pl-0">
        <input type="text" name="" class="form-control sosmedName" data-sosmed="soundcloud" placeholder="Type your soundcloud URL here.." value="" data-id="${id}">
        <div class="invalid-feedback">Invalid URL</div>
      </div>
    </div>`;

    const tumblr = (id) => `<div class="row mb-5" id="tumblr">
      <div class="col-2 col-sm-1 my-auto">
        <div class="d-flex justify-content-center">
          <i class='bx bxl-tumblr bx-md text-black'></i>
        </div>
      </div>
      <div class="col-10 col-sm-11 pl-0">
        <input type="text" name="" class="form-control sosmedName" data-sosmed="tumblr" placeholder="Type your tumblr URL here.." value="" data-id="${id}">
        <div class="invalid-feedback">Invalid URL</div>
      </div>
    </div>`;

    const wikipedia = (id) => `<div class="row mb-5" id="wikipedia">
      <div class="col-2 col-sm-1 my-auto">
        <div class="d-flex justify-content-center">
          <i class='bx bxl-wikipedia bx-md text-black'></i>
        </div>
      </div>
      <div class="col-10 col-sm-11 pl-0">
        <input type="text" name="" class="form-control sosmedName" data-sosmed="wikipedia" placeholder="Type your wikipedia URL here.." value="" data-id="${id}">
        <div class="invalid-feedback">Invalid URL</div>
      </div>
    </div>`;

    const github = (id) => `<div class="row mb-5" id="github">
      <div class="col-2 col-sm-1 my-auto">
        <div class="d-flex justify-content-center">
          <i class='bx bxl-github bx-md text-black'></i>
        </div>
      </div>
      <div class="col-10 col-sm-11 pl-0">
        <input type="text" name="" class="form-control sosmedName" data-sosmed="github" placeholder="Type your github URL here.." value="" data-id="${id}">
        <div class="invalid-feedback">Invalid URL</div>
      </div>
    </div>`;

    const website = (id) => `<div class="row mb-5" id="website">
      <div class="col-2 col-sm-1 my-auto">
        <div class="d-flex justify-content-center">
          <i class='bx bx-world bx-md text-black'></i>
        </div>
      </div>
      <div class="col-10 col-sm-11 pl-0">
        <input type="text" name="" class="form-control sosmedName" data-sosmed="wolrd" placeholder="Type your website URL here.." value="" data-id="${id}">
        <div class="invalid-feedback">Invalid URL</div>
      </div>
    </div>`;

    const socialData = {
        facebook:facebook,
        twitter:twitter,
        linkedin:linkedin,
        wikipedia:wikipedia,
        website:website,
        pinterest:pinterest,
        github:github,
        tumblr:tumblr,
        soundcloud:soundcloud,
        instagram:instagram,
        youtube:youtube
    }

    const personSchema = class {
        constructor() {
            this.name = '';
            this.url = '';
            this.image = '';
            this.sameAs = [];
            this.jobTitle = undefined;
            this.worksFor = {
                "@type": "Organization",
                "name": ""
            }

            this.socialMedia = [];
            this.tempSocial = [];
        }

        render(){
            const obj = {
                "@context": "https://schema.org/",
                "@type": "Person",
                "name": this.name,
                "url": this.url,
                "image": this.image
            }

            obj.name = this.name;
            obj.url = this.url;
            obj.image = this.image;

            if(this.sameAs.length > 0) obj.sameAs = this.sameAs;

            if(this.jobTitle) obj.jobTitle = this.jobTitle;

            if(this.worksFor.name) obj.worksFor = this.worksFor;

            $("#json-format").val("<script type=\"application/ld+json\">\n" + JSON.stringify(obj, undefined, 4) + "\n<\/script>");
            return obj;
        }
    }

    let personFormat = new personSchema();
    personFormat.render();


    jQuery(document).ready(function () {
    let deletes = lang ==='en'? 'Delete' : 'Hapus';
    let name = lang ==='en'? 'Name' : 'Nama';
    let url = lang ==='en'? 'Url':'Url';
    let pictureUrl = lang ==='en'? 'PictureUrl' : 'UrlGambar';
    let jobTitle = lang ==='en'? 'JobTitle':'Jabatan';

    let sosmed = lang==='en'?'Sosmed':'Medsos';
    let sosmedName = lang==='en'?'Name':'Nama';
});

    $('.name').keyup(function (e) {
        personFormat.name = $(this).val();
        personFormat.render();
    });

    $('.url').keyup(function (e) {
        personFormat.url = $(this).val();
        personFormat.render();
    });

    $('.pictureUrl').keyup(function (e) {
        personFormat.image = $(this).val();
        personFormat.render();
    });

    $('.jobTitle').keyup(function (e) {
        personFormat.jobTitle = $(this).val();
        personFormat.render();
    });

    $('.company').keyup(function (e) {
        personFormat.worksFor.name = $(this).val();
        personFormat.render();
    });


    $('.social-profiles').change(function (e) {
        if(personFormat.tempSocial.length > $(this).val().length){
            for(let i=0; i < personFormat.tempSocial.length; i++){
                if($.inArray(personFormat.tempSocial[i], $(this).val()) == -1) {
                    $('#'+personFormat.tempSocial[i]+'').remove();
                    personFormat.tempSocial.splice(i, 1);
                    personFormat.sameAs.splice(i,1);
                    // counterSocial--;
                }
            }

        }

    for (let i=0;i< $(this).val().length; i++){
        if($.inArray($(this).val()[i], personFormat.tempSocial) == -1) {
            // counterSocial++;
            $('.sosial-profile-url').append(eval('socialData.'+$(this).val()[i]+'('+i+')'));
            personFormat.tempSocial.push($(this).val()[i])
            personFormat.sameAs.push("");
        }
    }

    personFormat.render();

    });

    $(document).on('keyup', '.sosmedName', function () {
        let index = parseInt($(this).data('id'));
        // console.log(index)
        personFormat.sameAs[index] = $(this).val();
        personFormat.render();
    });


    $(document).on('change', '#schema-json-ld', function() {
        if($(this).val() !== 'home') {
            window.location = 'json-ld-' + $(this).val() + '-schema-generator'
        }else{
            window.location = 'json-ld-schema-generator'
        }
    });

    $('#copy').click(function () {
        const copyText = $('#json-format');
        copyText.select();
        // copyText.setSelectionRange(0, 999999); /*For mobile devices*/
        document.execCommand("copy");
    });
