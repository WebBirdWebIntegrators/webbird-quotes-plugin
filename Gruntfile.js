module.exports = function(grunt) {

  grunt.initConfig({

    csscomb: {
        options: {
            // Task-specific options go here.
        },
        your_target: {
            // Target-specific file lists and/or options go here.
            files: {
                'assets/sass/*': ['assets/sass/*']
            }
        }
    },

    sass: {
      dist: {
        options: {
          cacheLocation: 'assets/sass/.sass-cache'
        },
        files: {
          'css/styles.css': 'assets/sass/styles.scss'
        }
      }
    },

    concurrent: {
        batch1: ['csscomb', 'sass']
    },

    watch: {
      files: ['assets/sass/*'],
      tasks: ['sass'],
    },

    compress: {
      main: {
        options: {
          archive: 'webbird-quotes.zip'
        },
        files: [
          {src: ['**', '!assets/sass/**', '!node_modules/**', '!Gruntfile.js', '!package.json', '!webbird-quotes.zip'], dest: 'webbird-quotes/'}, // includes files in path and its subdirs
        ]
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-csscomb');
  grunt.loadNpmTasks('grunt-concurrent');
  grunt.loadNpmTasks('grunt-contrib-compress');

  grunt.registerTask('batch', ['concurrent:batch1']);

};
