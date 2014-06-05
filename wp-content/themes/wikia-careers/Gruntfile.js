'use strict';
module.exports = function(grunt) {

  grunt.initConfig({
    rename: {
      moveThis: {
          src: 'assets/img/svg/output/icons.data.svg.css',
          dest: 'assets/img/svg/output/icons.data.svg.less'
      }
    },
    pkg: grunt.file.readJSON('package.json'),
    svgmin: { //minimize SVG files
      options: {
          plugins: [
              { removeViewBox: false },
              { removeUselessStrokeAndFill: false }
          ]
      },
      dist: {
          expand: true,
          cwd: 'assets/img/svg/raw',
          src: ['*.svg'],
          dest: 'assets/img/svg/compressed',
          ext: '.colors-light-brand_prim-white-gray-gray_light.svg'
      }
    },
    grunticon: { //makes SVG icons into a CSS file
      myIcons: {
          files: [{
              expand: true,
              cwd: 'assets/img/svg/compressed',
              src: ['*.svg'],
              dest: 'assets/img/svg/output'
          }],
          options: {
              cssprefix: '.icon-',
              colors: {
                  light: '#ccc',
                  brand_prim: '#0a5fa3',
                  white: '#fff',
                  gray: '#555',
                  gray_light: '#9b9b9b'
              }
          }
      }
    },
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: [
        'Gruntfile.js',
        'assets/js/*.js',
        '!assets/js/scripts.min.js',
        'assets/js/plugins/*.js'
      ]
    },
    less: {
      dist: {
        files: {
          'assets/css/main.min.css': [
            'assets/less/app.less'
          ]
        },
        options: {
          compress: true,
          // LESS source map
          // To enable, set sourceMap to true and update sourceMapRootpath based on your install
          sourceMap: true,
          sourceMapFilename: 'assets/css/main.min.css.map',
          sourceMapRootpath: '../../'
        }
      }
    },
    uglify: {
      dist: {
        files: {
          'assets/js/scripts.min.js': [
            'assets/js/plugins/bootstrap/transition.js',
            'assets/js/plugins/bootstrap/alert.js',
            'assets/js/plugins/bootstrap/button.js',
            'assets/js/plugins/bootstrap/carousel.js',
            'assets/js/plugins/bootstrap/collapse.js',
            'assets/js/plugins/bootstrap/dropdown.js',
            'assets/js/plugins/bootstrap/modal.js',
            'assets/js/plugins/bootstrap/tooltip.js',
            'assets/js/plugins/bootstrap/popover.js',
            'assets/js/plugins/bootstrap/scrollspy.js',
            'assets/js/plugins/bootstrap/tab.js',
            'assets/js/plugins/bootstrap/affix.js',
            'assets/js/plugins/flexslider/jquery.flexslider.js',
            'assets/js/plugins/*.js',
            'assets/js/_*.js'
          ]
        },
        options: {
          // JS source map: to enable, uncomment the lines below and update sourceMappingURL based on your install
          // sourceMap: 'assets/js/scripts.min.js.map',
          // sourceMappingURL: '/app/themes/roots/assets/js/scripts.min.js.map'
        }
      }
    },
    version: {
      options: {
        file: 'lib/scripts.php',
        css: 'assets/css/main.min.css',
        cssHandle: 'roots_main',
        js: 'assets/js/scripts.min.js',
        jsHandle: 'roots_scripts'
      }
    },
    watch: {
      less: {
        files: [
          'assets/less/*.less',
          'assets/less/bootstrap/*.less'
        ],
        tasks: ['less', 'version']
      },
      js: {
        files: [
          '<%= jshint.all %>'
        ],
        tasks: ['jshint', 'uglify', 'version']
      },
      livereload: {
        // Browser live reloading
        // https://github.com/gruntjs/grunt-contrib-watch#live-reloading
        options: {
          livereload: false
        },
        files: [
          'assets/css/main.min.css',
          'assets/js/scripts.min.js',
          'templates/*.php',
          '*.php'
        ]
      }
    },
    clean: {
      dist: [
        'assets/css/main.min.css',
        'assets/js/scripts.min.js',
        'assets/img/svg/compressed',
        'assets/img/svg/output']
    }
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-wp-version');
  grunt.loadNpmTasks('grunt-rename');
  grunt.loadNpmTasks('grunt-svgmin');
  grunt.loadNpmTasks('grunt-grunticon');

  // Register tasks
  grunt.registerTask('icons', [
    'clean',
    'svgmin',
    'grunticon']);
  grunt.registerTask('default', [
    'clean',
	'svgmin',
	'grunticon',
	'rename',
    'less',
    'uglify',
    'version'
  ]);
  grunt.registerTask('dev', [
    'watch'
  ]);

};
