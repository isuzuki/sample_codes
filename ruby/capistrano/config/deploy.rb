set :user,		"isuzuki" # ssh user
ssh_options[:keys] = 	"/home/#{user}/.ssh/id_rsa"

set :application,	"app"
set :use_sudo,		false
set :scm,		:git
set :repository,	"https://github.com/isuzuki/sample_codes.git"

role :app,		"localhost"

set :deploy_to,		"/tmp/deploy/#{application}"

namespace :deploy do
	task :hello do
		puts "Hello World"
	end
end
