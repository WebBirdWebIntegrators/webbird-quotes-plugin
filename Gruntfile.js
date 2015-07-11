module.exports = function(grunt) {

  grunt.initConfig({

    csscomb: {
        options: {
            // Task-specific options go here.
        },
        your_target: {
            // Target-specific file lists and/or options go here.
            files: {
                'assets/sass/styles.scss': ['assets/sass/styles.scss']
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
    }

  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-csscomb');
  grunt.loadNpmTasks('grunt-concurrent');

  grunt.registerTask('batch', ['concurrent:batch1']);

};
