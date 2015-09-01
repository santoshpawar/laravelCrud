// A $( document ).ready() block.
Dropzone.options.addImages = {
    //paramName: "file", // The name that will be used to transfer the file
    maxFilesize: 2, // MB
    acceptedFiles:'image/*',
    success:function(file,response){
        if(file.status=='success'){
            handleDropzoneFileUplaod.handleSuccess(response);


        }else{

            handleDropzoneFileUplaod.handleError(response);
        }


    }

};

var handleDropzoneFileUplaod={
    handleError:function(response){
        console.log(response);

    },
    handleSuccess:function(response){
        var imageList=$("#gallery_images ul");
        var imageSrc=basUrl+'/'+response.file_path;
        $(imageList).append('<li><a href="'+ imageSrc+'"><img src="'+ imageSrc+'"></a></li>');
    }
};

