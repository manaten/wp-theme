module.exports = (grunt)->
  pkg = grunt.file.readJSON 'package.json'
  grunt.initConfig
    pkg: pkg

    clean:
      dist: ["*.css"]

    compass:
      dist:
        options:
          config: 'config.rb'

    csscomb:
      comb:
        expand: true
        cwd: '.'
        src: ['*.css']
        dest: '.'

    cssmin:
      all:
        expand: true
        cwd: '.'
        src: ['*.css']
        dest: '.'

    uncss:
     dist:
      options:
        ignore: [/entry-content/, /page-archive/, /page-about/, /#zenback/]
        stylesheets: ['../style.css']
      files:
        'style.css': ['html/hatena.html']

    watch:
      coffee:
        files: ['src/scss/**/*', 'src/img/**/*']
        tasks: ['compile']

  (grunt.loadNpmTasks task if task.match /^grunt\-/) for task of pkg.devDependencies

  grunt.registerTask 'compile', ['clean', 'compass', 'uncss']
  grunt.registerTask 'min', ['compile', 'csscomb', 'cssmin']
  grunt.registerTask 'default', ['compile', 'watch']
