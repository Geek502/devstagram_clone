import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

// const dropzone = new Dropzone("#dropzones", {
//     dictDefaultMessage: "Sube aquí tu imagen",
//     acceptedFiles: ".png,.jpg,.jpeg,.gif",
//     addRemoveLinks:true,
//     dictRemoveFile:"Borra Archivo",
//     maxFiles: 1,
//     uploadMultiple:false,
// });

// Dropzone.autoDiscover = false;

let myDropzone = new Dropzone("#dropzone");
myDropzone.on("addedfile", file => {
  console.log(`File added: ${file.name}`);
});