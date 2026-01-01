module.exports = function(grunt) {
    // Project configuration
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // Zip Export Task
        compress: {
            main: {
                options: {
                    archive: 'zamkai-fse.zip',
                    mode: 'zip'
                },
                files: [
                    // Core root files
                    { src: ['*.php', 'readme.txt', 'screenshot.png', 'style.css', 'theme.json'], dest: '/', filter: 'isFile' },

                    // Full folders to include (recursive)
                    { src: ['assets/**'], dest: '/' },
                    { src: ['parts/**'], dest: '/' },
                    { src: ['patterns/**'], dest: '/' },
                    { src: ['src/**'], dest: '/' },
                    { src: ['templates/**'], dest: '/' },

                    // Optional: If you have these WordPress.org assets (banner, icon, etc.)
                    { src: ['.wordpress-org/**'], dest: '/' },

                    // Explicit excludes - these will override any includes above
                    { src: ['!node_modules/**'] },
                    { src: ['!vendor/**'] },
                    { src: ['!composer.json'] },
                    { src: ['!.gitignore'] },
                    { src: ['!Gruntfile.js'] },
                    { src: ['!LICENSE'] },
                    { src: ['!package.json'] },
                    { src: ['!package-lock.json'] },
                    { src: ['!readme.md'] },

                    // Also exclude any hidden files/folders you don't want
                    { src: ['!.git/**'] },
                    { src: ['!.github/**'] },
                    { src: ['!.*'] } // Excludes all dotfiles like .DS_Store, .editorconfig, etc.
                ]
            }
        }
    });

    // Load the compress task
    grunt.loadNpmTasks('grunt-contrib-compress');

    // Default task: run compress
    grunt.registerTask('default', ['compress']);
};