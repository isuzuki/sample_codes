set :env,		"staging"

namespace :deploy do
	task :hello do
		puts "Hello #{env} World"
	end
end

