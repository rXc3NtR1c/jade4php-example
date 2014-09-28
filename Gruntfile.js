module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    clean: {
      compile: ["htdocs/templates/*.phtml"],
    },
    jade4php: {
      compile: {
        options: {
          pretty: true
        },
        expand: true,
        cwd: 'jade',
        src: ['*.jade'],
        dest: 'htdocs/templates',
        ext: '.phtml'
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-jade4php');

  grunt.registerTask('default', ['clean','jade4php']);

};